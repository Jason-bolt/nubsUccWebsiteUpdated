<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function events()
    {
        $events = Event::all();
        $page = "News/Events";
        return view('cms.news_events')->with([
            "page" => $page,
            "events" => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image'],
            'description' => ['required', 'string']
        ]);

        $file = $request->file('image');
        $formatted_image_name = str_replace(' ', '_', $file->getClientOriginalName());
        $image_filename = date('YmdHi') . $formatted_image_name;

        // Always ensure directory exists before running this code.
        // Image::..->save(location) does not automatically create directory
        $location = public_path('images/events/' . $image_filename);
        Image::make($file)->resize(1366,900)->save($location);

        Event::create([
            'image' => $image_filename,
            'description' => $request->description
        ]);

        return back()->with('status', 'Event added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
* //     * @param  int  $id
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'image' => ['nullabe', 'image'],
            'description' => ['nullable', 'required', 'string']
        ]);
        $id = $event->id;

        if ($request->file('image'))
        {
            $file = $request->file('image');
            $formatted_image_name = str_replace(' ', '_', $file->getClientOriginalName());
            $image_filename = date('YmdHi') . $formatted_image_name;

            // Always ensure directory exists before running this code.
            // Image::..->save(location) does not automatically create directory
            $location = public_path('images/events/' . $image_filename);
            Image::make($file)->resize(1366,900)->save($location);
        }else{
            $image_filename = $event->image;
        }

        Event::where('id', $event->id)
                ->update([
                    'image' => $image_filename,
                    'description' => $request->description
                ]);

        return back()->with('status', 'Event updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
