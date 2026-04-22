<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Traits\FileUploader;
use Illuminate\Http\Request;
use Razorpay\Api\Product;

class ProjectController extends Controller
{

    use FileUploader;

    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_project', 1);
        $this->route     = 'admin.project';
        $this->view      = 'admin.web.projects.project';
        $this->path      = 'project';
        $this->access    = 'project';

        $this->middleware('permission:' . $this->access . '-view|' . $this->access . '-create|' . $this->access . '-edit|' . $this->access . '-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:' . $this->access . '-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $this->access . '-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $this->access . '-delete', ['only' => ['destroy']]);
        $this->middleware('permission:' . $this->access . '-condition', ['only' => ['ImageCondition']]);
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

        $data['projects'] = Project::where('status', '1')->orderBy('id', 'asc')->get();

        return view($this->view . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;

        return view($this->view . '.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string',
            'description' => 'nullable|string',
            'attach' => 'nullable|image',
        ]);

        try {
            $project = new Project();
            $project->title = $request->title;
            $project->sub_title = $request->sub_title;
            $project->button_more = $request->button_more;
            $project->attribute = $request->attribute;

            $project->description = $request->description;

            if ($request->hasFile('attach')) {
                $project->attach = $this->uploadImage($request, 'attach', $this->path, 450, 220);
            }


            $project->save();
            return redirect()->route($this->route . '.index')->with(['message' => 'Project created successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Project creation failed", 'alert-type' => 'error']);
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
        $project = Project::findOrFail($id);

        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;
        $data['project'] = $project;

        return view($this->view . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string',
            'description' => 'nullable|string',
            'attach' => 'nullable|image',
        ]);

        try {
            $project = Project::findOrFail($id);

            $project->title = $request->title;
            $project->sub_title = $request->sub_title;
            $project->button_more = $request->button_more;
            $project->attribute = $request->attribute;

            if ($request->hasFile('attach')) {
                $project->attach = $this->updateImage($request, 'attach', $this->path, 450, 220, $project, 'attach');
            }

            $project->description = $request->description;

            $project->update();
            return redirect()->route($this->route . '.index')->with(['message' => 'Project updated successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['message' => "Project updation failed", 'alert-type' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);
        //Delete Attach
        $this->deleteMedia($this->path, $project);

        //Delete Data
        $project->delete();

        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
