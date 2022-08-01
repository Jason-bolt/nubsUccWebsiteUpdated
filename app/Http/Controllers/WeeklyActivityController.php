<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\WeeklyActivity;
use Illuminate\Http\Request;

class WeeklyActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function activities()
    {
        $page = "Weekly Activities";
        $activities = WeeklyActivity::all();
        return view('cms.weekly_activities')->with([
            'page' => $page,
            'activities' => $activities,
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WeeklyActivity  $weeklyActivity
     * @return \Illuminate\Http\Response
     */
    public function show(WeeklyActivity $weeklyActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeeklyActivity  $weeklyActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(WeeklyActivity $weeklyActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
//        Checking if admin id was sent
        if ($request->id == null)
        {
            return redirect('/');
        }
        $id = $request->id;
        $time = $request->time;
        $location_id = $request->location;

//        Validate form with or without image
        $rules = [
            "id" => ['bail', 'required', 'integer'],
            "image" => ['nullable', 'image'],
            "time" => ['required', 'string'],
            "location" => ['required', 'string']
        ];

//        Validate form
        $request->validate($rules);

        if($request->file('image')){
            $file = $request->file('image');
            $formatted_image_name = str_replace(" ", "_", $file->getClientOriginalName());
//            Save image under different file name (using the date)
            $image_filename = date('YmdHi') . $formatted_image_name;
            $file-> move(public_path('images/weekly_activity'), $image_filename);

            WeeklyActivity::where('id', $id)
                ->update([
                    'image' => $image_filename,
                    'time' => $time,
                    'location_id' => $location_id
                ]);
        }else{
            $image_filename = null;
            WeeklyActivity::where('id', $id)
                ->update([
                    'time' => $time,
                    'location_id' => $location_id
                ]);
        }

        return back()->with("status", "Activity updated successfully!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeeklyActivity  $weeklyActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeeklyActivity $weeklyActivity)
    {
        //
    }
}
