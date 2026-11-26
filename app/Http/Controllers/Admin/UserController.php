<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;
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


        $this->middleware('permission:' . $this->access . '-view|' . $this->access . '-create|' . $this->access . '-edit|' . $this->access . '-delete', ['only' => ['index', 'show', 'status']]);
        $this->middleware('permission:' . $this->access . '-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $this->access . '-edit', ['only' => ['edit', 'update', 'status', 'sendPassword', 'passwordChange']]);
        $this->middleware('permission:' . $this->access . '-delete', ['only' => ['destroy']]);
        $this->middleware('permission:' . $this->access . '-password-print', ['only' => ['printPassword']]);
        $this->middleware('permission:' . $this->access . '-password-change', ['only' => ['passwordChange']]);
        $this->middleware('permission:' . $this->access . '-import', ['only' => ['import', 'importStore']]);
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

        $data['users'] = User::whereHas('roles')->with('roles')->orderBy('id', 'desc')->get();

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
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'roles' => ['required', 'array', 'size:1'],
            'roles.0' => ['required', 'integer', Rule::exists('roles', 'id')],
            'attach' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $role = Role::findOrFail($validated['roles'][0]);
        $user = new User();
        $user->first_name = trim($validated['first_name']);
        $user->last_name = trim($validated['last_name'] ?? '');
        $user->name = trim($user->first_name . ' ' . $user->last_name);
        $user->email = strtolower(trim($validated['email']));
        // Password is never displayed, emailed or stored in reversible form.
        $user->password = Hash::make(Str::random(48));
        $user->password_text = '';
        // A provisional unique identifier avoids collisions before the database ID exists.
        $user->staff_id = 'PF-' . strtoupper(Str::random(12));
        $user->role_id = $role->id;
        $user->attach = $request->hasFile('attach')
            ? $this->uploadImage($request, 'attach', $this->path, 300, 300)
            : null;
        $user->save();
        $user->staff_id = 'PF-' . str_pad((string) $user->id, 5, '0', STR_PAD_LEFT);
        $user->save();
        $user->syncRoles([$role->name]);

        // Invitation is a single-use password setup/reset link.
        try {
            $status = Password::broker('users')->sendResetLink(['email' => $user->email]);
            if ($status === Password::RESET_LINK_SENT) {
                return redirect()->route($this->route . '.index')->with('status', 'Staff account created. A password setup link has been emailed.');
            }
        } catch (\Throwable $e) {
            report($e);
        }
        return redirect()->route($this->route . '.index')->with('warning', 'Staff account created, but the setup email could not be sent. Check your mail configuration and use Send setup link.');
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
        $data['title'] = $this->title;
        $data['route'] = $this->route;
        $data['path'] = $this->path;
        $data['access'] = $this->access;
        $data['view'] = $this->view;
        $data['user'] = User::with('roles')->findOrFail($id);
        $data['roles'] = Role::orderBy('name', 'asc')->get();
        $data['userRoles'] = $data['user']->roles->pluck('id')->toArray();
        return view($this->view . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'roles' => ['required', 'array', 'size:1'],
            'roles.0' => ['required', 'integer', Rule::exists('roles', 'id')],
            'attach' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);
        $role = Role::findOrFail($validated['roles'][0]);
        // Prevent an administrator from accidentally stripping their own access.
        if ($user->id === auth()->id() && !$user->hasRole($role->name)) {
            return back()->withInput()->withErrors(['roles' => 'You cannot change your own role. Ask another administrator.']);
        }
        $user->first_name = trim($validated['first_name']);
        $user->last_name = trim($validated['last_name'] ?? '');
        $user->name = trim($user->first_name . ' ' . $user->last_name);
        $user->email = strtolower(trim($validated['email']));
        $user->role_id = $role->id;
        if (empty($user->staff_id)) {
            $user->staff_id = 'PF-' . str_pad((string) $user->id, 5, '0', STR_PAD_LEFT);
        }
        if ($request->hasFile('attach')) {
            $user->attach = $this->updateImage($request, 'attach', $this->path, 300, 300, $user, 'attach');
        }
        $user->save();
        $user->syncRoles([$role->name]);
        return redirect()->route($this->route . '.index')->with('status', 'Staff account updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        if ($user->id === auth()->id()) {
            return back()->withErrors(['staff' => 'You cannot delete your own account.']);
        }

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
        abort(404);
    }


    public function showPassword($id)
    {
        abort(404);
    }

    public function sendPassword($id)
    {
        $user = User::findOrFail($id);
        try {
            $status = Password::broker('users')->sendResetLink(['email' => $user->email]);
            if ($status === Password::RESET_LINK_SENT) {
                return back()->with('status', 'A secure password setup link was sent to the staff email address.');
            }
            return back()->with('warning', 'The setup link could not be sent. Please check email delivery or retry later.');
        } catch (\Throwable $e) {
            report($e);
            return back()->with('warning', 'Unable to send the setup link. Please check mail configuration.');
        }
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
        $user->password_text = null;
        $user->save();


        $notification = array(
            'message' => __('msg_updated_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
