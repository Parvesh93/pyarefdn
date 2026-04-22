<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_role', 1);
        $this->route     = 'admin.role';
        $this->view      = 'admin.role';
        $this->path      = 'role';
        $this->access    = 'role';

        $this->middleware('permission:'.$this->access.'-view|'.$this->access.'-create|'.$this->access.'-edit|'.$this->access.'-delete', ['only' => ['index','show']]);
        $this->middleware('permission:'.$this->access.'-create', ['only' => ['create','store']]);
        $this->middleware('permission:'.$this->access.'-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:'.$this->access.'-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;

        $data['roles'] = Role::orderBy('id', 'asc')->get();

        // dd($data);

        return view($this->view . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;

        $data['permission'] = Permission::get();

        return view($this->view . '.create', $data);
    }

    // Removed duplicate store method to fix redeclaration error.

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Field Validation
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);


        // Insert Data
        DB::beginTransaction();
        $role = Role::create(['name' => $request->input('name'), 'slug' => Str::slug($request->input('name'), '-')]);
        $permissions = $request->input('permission');

        $data = array();
        foreach ($permissions as $key => $item) {
            $data[$key] = (int)$item;
        }

        if (!empty($data)) {
            $role->syncPermissions($data);
        }
        // $role->syncPermissions($request->input('permission'));

        DB::commit();




        $notification = array(
            'message' => __('msg_created_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->route($this->route . '.index')->with($notification);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;

        $data['role'] = Role::find($id);

        $data['rolePermissions'] = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();

        return view($this->view.'.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;

        $data['role'] = Role::find($id);
        $data['permission'] = Permission::get();

        $data['rolePermissions'] = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->get();

        return view($this->view . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Field Validation
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);


        // Update Data
        DB::beginTransaction();
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $permissions = $request->input('permission');


        // $permissions = array_map(function ($item) {
        //     return (int)$item;
        //   }, $permissions);

        //   if (!empty($permissions)){
        //     $role->syncPermissions($permissions);
        //   }

        // OR 


        $data = array();
        foreach ($permissions as $key => $item) {
            $data[$key] = (int)$item;
        }

        if (!empty($data)) {
            $role->syncPermissions($data);
        }


        // $role->syncPermissions($request->input('permission'));
        DB::commit();




        $notification = array(
            'message' => __('msg_updated_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);


        // return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Role::where('id', $id)->delete();

        // Toastr::success(__('msg_deleted_successfully'), __('msg_success'));
        // toastr('Deleted Successfully','success');

        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);

        // return redirect()->back();
    }
}
