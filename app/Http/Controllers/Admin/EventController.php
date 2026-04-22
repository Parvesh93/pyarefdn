<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Traits\FileUploader;

class EventController extends Controller
{

    use FileUploader;

    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_event', 1);
        $this->route     = 'admin.event';
        $this->view      = 'admin.event';
        $this->path      = 'event';
        $this->access    = 'event';

        $this->middleware('permission:' . $this->access . '-view|' . $this->access . '-create|' . $this->access . '-edit|' . $this->access . '-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:' . $this->access . '-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $this->access . '-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $this->access . '-delete', ['only' => ['destroy']]);
        $this->middleware('permission:' . $this->access . '-list', ['only' => ['eventList']]);
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

        // सारे events DB से लो
        $data['events'] = Event::all()->map(function ($event) {
            return [
                'title' => $event->title,
                'start' => $event->start_date,  // FullCalendar को 'start' चाहिए
                'color' => $event->color ?? '#60a5fa', // default color
            ];
        });

        $data['eventsside'] = Event::latest()->take(3)->get();

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
            'title' => 'required|string',
            'color' => 'nullable|string',
            'location' => 'nullable|string',
            'attach' => 'nullable|image',
            'start_date' => 'nullable|date',

        ]);

        try {

            // Create a new event
            $event = new Event();
            $event->title = $request->title;
            $event->location = $request->location;
            $event->color = $request->color;
            $event->start_date = $request->start_date;
            $event->end_date = $request->end_date;
            $event->description = $request->description;

            // Handle file upload if provided
            if ($request->hasFile('attach')) {
                $event->attach = $this->uploadImage($request, 'attach', $this->path, 200, 200);
            }

            $event->save();

            return redirect()->route('admin.event.index')->with(['message' => 'Event created successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Failed to create event.',
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
        $data['event'] = Event::find($id);
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;


        return view($this->view . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required|string',
            'color' => 'nullable|string',
            'location' => 'nullable|string',
            'attach' => 'nullable|image',
            'start_date' => 'nullable|date',

        ]);

        try {

            // Create a new event
            $event =  Event::find($id);
            $event->title = $request->title;
            $event->location = $request->location;
            $event->color = $request->color;
            $event->start_date = $request->start_date;
            $event->end_date = $request->end_date;
            $event->description = $request->description;

            // Handle file upload if provided
            if ($request->hasFile('attach')) {
                $event->attach = $this->updateImage($request, 'attach', $this->path, 200, 200, $event, 'attach');
            }

            $event->update();

            return redirect()->back()->with(['message' => 'Event updated successfully!', 'alert-type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Failed to updation event.',
                'alert-type' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::find($id);
        //Delete Attach
        $this->deleteMedia($this->path, $event);

        //Delete Data
        $event->delete();

        // Toastr::success(__('msg_deleted_successfully'), __('msg_success'));
        $notification = array(
            'message' => __('msg_deleted_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }


    public function eventList()
    {

        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;
        $data['access']    = $this->access;

        $data['rows'] = Event::get();

        return view($this->view . '.event_list', $data);
    }
}
