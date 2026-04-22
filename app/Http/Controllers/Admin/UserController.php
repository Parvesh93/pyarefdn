<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use App\Mail\SendPassword;

class UserController extends Controller
{

    use FileUploader;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_staff', 1);
        $this->route     = 'admin.user';
        $this->view      = 'admin.user';
        $this->path      = 'user';
        $this->access    = 'user';


        $this->middleware('permission:' . $this->access . '-view|' . $this->access . '-create|' . $this->access . '-edit|' . $this->access . '-delete', ['only' => ['index', 'show', 'status', 'sendPassword']]);
        $this->middleware('permission:' . $this->access . '-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $this->access . '-edit', ['only' => ['edit', 'update', 'status']]);
        $this->middleware('permission:' . $this->access . '-delete', ['only' => ['destroy']]);
        $this->middleware('permission:' . $this->access . '-password-print', ['only' => ['printPassword']]);
        $this->middleware('permission:' . $this->access . '-password-change', ['only' => ['passwordChange']]);
        $this->middleware('permission:' . $this->access . '-import', ['only' => ['index', 'import', 'importStore']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;
        $data['view'] = $this->view;

        $data['users'] = User::orderBy('id', 'asc')->get();

        return view($this->view . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;
        $data['view'] = $this->view;

        $data['roles'] = Role::orderBy('name', 'asc')->get();

        return view($this->view . '.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'email' => 'required|unique:users,email',
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,id',
            'attach' => 'nullable|image',
        ]);

        // dd($request->role);
        // Random Password
        $password = Str::random(8);

        try {
            $user = new User();
            $user->staff_id = $request->staff_id;
            $user->name = $request->first_name . ' ' . $request->last_name;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->father_name = $request->father_name;
            $user->mother_name = $request->mother_name;
            $user->email = $request->email;
            $user->password = Hash::make($password);
            $user->password_text = Crypt::encryptString($password);
            $user->gender = $request->gender;
            $user->role_id = $request->roles[0];


            $user->attach = $this->uploadImage($request, 'attach', $this->path, 300, 300);


            $user->save();

            // ✅ Convert role IDs to names
            $roleNames = Role::whereIn('id', (array) $request->roles)->pluck('name')->toArray();

            // ✅ Assign roles by name
            $user->assignRole($roleNames);

            $notification = array(
                'message' => __('msg_created_successfully'),
                'alert-type' => __('msg_success')
            );

            return redirect()->route($this->route . '.index')->with($notification);
        } catch (\Exception $e) {
            $notification = array(
                'message' => __('msg_created_error'),
                'alert-type' => __('msg_error')
            );

            // return redirect()->route($this->route.'.index')->with($notification);

            return redirect()->back()->with($notification);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // dd($id);

        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;
        $data['view'] = $this->view;

        $data['user'] = User::find($id);

        $data['roles'] = Role::orderBy('name', 'asc')->get();

        $data['userRoles'] = $data['user']->roles->pluck('id')->toArray();


        return view($this->view . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,id',
            'attach' => 'nullable|image',
        ]);


        // dd($request->roles[0]);

        try {
            $user = User::findOrFail($id);
            $user->staff_id = $request->staff_id;
            $user->name = $request->first_name . ' ' . $request->last_name;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->father_name = $request->father_name;
            $user->mother_name = $request->mother_name;
            $user->email = $request->email;
            $user->gender = $request->gender;
            $user->role_id = $request->roles[0];

            if ($request->hasFile('attach')) {
                $user->attach = $this->updateImage(
                    $request,
                    'attach',
                    $this->path,
                    300,
                    300,
                    $user,
                    'attach'
                );
            }

            $user->save();

            // ✅ Sync roles
            $roleNames = Role::whereIn('id', (array) $request->roles)->pluck('name')->toArray();
            $user->syncRoles($roleNames);

            $notification = array(
                'message' => __('msg_updated_successfully'),
                'alert-type' => __('msg_success')
            );

            return redirect()->route($this->route . '.index')->with($notification);
        } catch (\Exception $e) {
            $notification = array(
                'message' => __('msg_updated_error'),
                'alert-type' => __('msg_error')
            );

            return redirect()->back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        // Delete attached image or files
        $this->deleteMedia($this->path, $user);

        // Remove roles explicitly (optional safety)
        $user->syncRoles([]);

        // If user has permissions directly assigned
        $user->syncPermissions([]);

        // Delete user
        $user->delete();

        // Success message
        $notification = [
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success'),
        ];

        return redirect()->back()->with($notification);
    }


    public function printPassword($id)
    {
        $data['user'] = User::findOrFail($id);
        return view($this->view . '.print-password', $data);
    }


    public function showPassword($id)
    {
        $data['row'] = User::findOrFail($id);

        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;
        $data['view'] = $this->view;

        return view($this->view . '.view-password', $data);
    }

    public function sendPassword($id)
    {

        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;
        $data['view'] = $this->view;


        $sendPasswordData = User::findOrFail($id);

        if ($sendPasswordData) {
            // Send email logic here
            // You can use Laravel's Mail facade to send the email
            // Example:
            Mail::to($sendPasswordData->email)->send(new SendPassword($sendPasswordData));

            return redirect()->back()->with([
                'message' => 'Password sent to email successfully!',
                'alert-type' => 'success'
            ]);
        }

        return redirect()->back()->with([
            'message' => 'User not found.',
            'alert-type' => 'error'
        ]);
    }

    public function passwordChange(Request $request)
    {
        // Field Validation
        $request->validate([
            'staff_id' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        // Update Data
        $user = User::findOrFail($request->staff_id);
        $user->password = Hash::make($request->password);
        $user->password_text = Crypt::encryptString($request->password);
        $user->save();


        $notification = array(
            'message' => __('msg_updated_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
