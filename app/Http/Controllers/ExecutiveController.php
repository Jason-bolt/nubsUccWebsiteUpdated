<?php

namespace App\Http\Controllers;

use App\Models\Executive;
use App\Models\YearGroup;
use Illuminate\Http\Request;

class ExecutiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function get_executives()
    {
        $page = 'Executives';
        $year_groups = YearGroup::all();
        return view('cms.executives')->with([
            'page' => $page,
            'year_groups' => $year_groups
        ]);
    }

    /**
     * Add a new year group.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add_year_group(Request $request)
    {
        $current_year_group = YearGroup::get('year_group')->last();
        if ($current_year_group == null)
        {
            $new_year_group = "2019/20";
        }else{
            // Separate the years
            $broken_down_year_group = preg_split('*/*', $current_year_group->year_group);

            // Add 1 to both years
            $first_year = (int)$broken_down_year_group[0] + 1;
            $second_year = (int)$broken_down_year_group[1] + 1;

            // Combining the years again
            $new_year_group = $first_year . '/' . $second_year;
        }

        YearGroup::create([
            'year_group' => $new_year_group
        ]);
        return back()->with('status', 'New year group added!');
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
     * @param  \App\Models\Executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function show(Executive $executive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function edit(Executive $executive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Executive $executive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Executive $executive)
    {
        //
    }
}
