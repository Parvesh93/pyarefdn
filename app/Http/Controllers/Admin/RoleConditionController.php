<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoleCondition;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleConditionController extends Controller
{

    public function __construct()
    {
        // Module Data
        $this->title    = trans_choice('module_role_condition', 1);
        $this->route    = 'admin.staff-condition';
        $this->view     = 'admin.role-condition';
        $this->access   = 'role-condition';

        $this->middleware('permission:' . $this->access . '-view');

    }

    public function index()
    {

        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;

        $data['row'] = RoleCondition::where('status', '1')->first();
        $data['roles'] = Role::orderBy('name', 'asc')->get();
       

        return view($this->view . '.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'super_admin_id' => 'required',
    
            'manager_id' => 'required',
            'author_id' => 'required',
        ]);

        $id = $request->id;

        // -1 means no data row found
        if ($id == -1) {
            // Insert Data
            $data = new RoleCondition();
            $data->super_admin_id = $request->super_admin_id;
            // $data->admin_id = $request->admin_id;
            $data->manager_id = $request->manager_id;
            $data->author_id = $request->author_id;

            $data->save();
        } else {
            // Update Data
            $data = RoleCondition::find($id);
            $data->super_admin_id = $request->super_admin_id;
            // $data->admin_id = $request->admin_id;
            $data->manager_id = $request->manager_id;
            $data->author_id = $request->author_id;

            $data->save();
        }


        $notification = array(
            'message' => __('msg_updated_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
