<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\CoreTeam;
use App\Traits\FileUploader;
use Illuminate\Http\Request;

class CoreTeamMemberController extends Controller
{

    use FileUploader;
    

      function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_core_team', 1);
        $this->route     = 'admin.core-team';
        $this->view      = 'admin.web.core-team';
        $this->path      = 'core-team';
        $this->access    = 'core-team';

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
        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;

        $data['coreTeams'] = CoreTeam::where('status', '1')->orderBy('id', 'asc')->get();

        return view($this->view.'.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'attach' => 'nullable|image',
        ]);

        try {
            $coreTeam = new CoreTeam();
            $coreTeam->name = $request->name;
            $coreTeam->designation = $request->designation;

            //width: 300px height: 390px

            if ($request->hasFile('attach')) {
                $coreTeam->attach = $this->uploadImage($request, 'attach', $this->path, 300, 390);
            }

            $coreTeam->save();

            return redirect()->route($this->route . '.index')->with(['message' => 'Core team created successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Core team creation failed", 'alert-type' => 'error']);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'attach' => 'nullable|image',
        ]);

        try {

            $coreTeam =  CoreTeam::findOrFail($id);
            $coreTeam->name = $request->name;
            $coreTeam->designation = $request->designation;

            //width: 300px height: 390px

            if ($request->hasFile('attach')) {
                $coreTeam->attach = $this->updateImage($request, 'attach', $this->path, 300, 390, $coreTeam, 'attach');
            }

            $coreTeam->update();


            return redirect()->route($this->route . '.index')->with(['message' => 'Core team update successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Core team updation failed", 'alert-type' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $coreTeam = CoreTeam::find($id);
        //Delete Attach
        $this->deleteMedia($this->path, $coreTeam);

        //Delete Data
        $coreTeam->delete();

        // Toastr::success(__('msg_deleted_successfully'), __('msg_success'));
        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
