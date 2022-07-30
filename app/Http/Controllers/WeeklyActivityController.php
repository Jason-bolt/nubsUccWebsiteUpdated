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
//        $locations = Location::all();
//        dd($locations);
//        dd(Location::find(3)->location_activities);
//        dd(WeeklyActivity::find(1)->activity_location);
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
     * @param  \App\Models\WeeklyActivity  $weeklyActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WeeklyActivity $weeklyActivity)
    {
        //
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
