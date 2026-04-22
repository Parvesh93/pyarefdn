<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Traits\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CampaignController extends Controller
{
    use FileUploader;

    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_campaign', 1);
        $this->route     = 'admin.campaign';
        $this->view      = 'admin.campaign';
        $this->path      = 'campaign';
        $this->access    = 'campaign';

        $this->middleware('permission:' . $this->access . '-view|' . $this->access . '-create|' . $this->access . '-edit|' . $this->access . '-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:' . $this->access . '-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $this->access . '-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $this->access . '-delete', ['only' => ['destroy']]);
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

        $data['campaigns'] = Campaign::all();

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

        return view($this->view . '.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|unique:campaigns,title',

            'attach' => 'nullable|image',
            'rises_amount' => 'nullable|string|max:255',
            'goal_amount' => 'nullable|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string',
        ]);


        try {
            $campaign = new Campaign();
            $campaign->title = $request->title;
            $campaign->slug = Str::slug($request->title, '-');

            //width: 400px height: 200px
            if ($request->hasFile('attach')) {
                $campaign->attach = $this->uploadImage($request, 'attach', $this->path, 400, 200);
            }
            $campaign->rises_amount = $request->rises_amount;
            $campaign->goal_amount = $request->goal_amount;
            $campaign->start_date = $request->start_date;
            $campaign->end_date = $request->end_date;
            $campaign->description = $request->description;
            $campaign->status = $request->status ? 1 : 0;
            $campaign->save();

            return redirect()->route('admin.campaign.index')->with(['message' => 'Campaign created successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Failed to create campaign.',
                'alert-type' => 'error'
            ]);
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
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;

        $data['campaign'] = Campaign::find($id);
        return view($this->view . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required|string',
            'attach' => 'nullable|image',
            'rises_amount' => 'nullable|string|max:255',
            'goal_amount' => 'nullable|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string',
        ]);
        try {
            $campaign = Campaign::find($id);
            $campaign->title = $request->title;
            $campaign->slug = Str::slug($request->title, '-');

            //width: 400px height: 200px
            if ($request->hasFile('attach')) {

                $campaign->attach = $this->updateImage($request, 'attach', $this->path, 400, 200, $campaign, 'attach');
            }
            $campaign->rises_amount = $request->rises_amount;
            $campaign->goal_amount = $request->goal_amount;
            $campaign->start_date = $request->start_date;
            $campaign->end_date = $request->end_date;
            $campaign->description = $request->description;
            $campaign->status = $request->status ? 1 : 0;
            $campaign->save();

            return redirect()->route('admin.campaign.index')->with(['message' => 'Campaign updated successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Failed to update campaign.',
                'alert-type' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $campaign = Campaign::find($id);
        //Delete Attach
        $this->deleteMedia($this->path, $campaign);

        //Delete Data
        $campaign->delete();


        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
