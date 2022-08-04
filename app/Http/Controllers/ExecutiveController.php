<?php

namespace App\Http\Controllers;

use App\Models\Executive;
use App\Models\YearGroup;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ExecutiveController extends Controller
{
    /**
     * Display executives of current batch.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function get_executives()
    {
        $page = 'Executives';

        // Check if the year group table is empty. If empty add 2019/20 year group
        $year_group_exists = YearGroup::get()->first();
        if ($year_group_exists == null)
        {
            YearGroup::create([
                'year_group' => '2019/20'
            ]);
        }

        $year_groups = YearGroup::all();

        // Get the latest year group id
        $latest_year_group_id = YearGroup::get('id')
                ->last()
                ->id;

        $executives = Executive::where('year_group_id', '=', $latest_year_group_id)->get();
        $batch = YearGroup::where('id', '=', $latest_year_group_id)
                ->get('year_group')
                ->first()
                ->year_group;
        return view('cms.executives')->with([
            'page' => $page,
            'year_groups' => $year_groups,
            'executives' => $executives,
            'batch' => $batch
        ]);
    }

    /**
     * Display executives of selected batch.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function get_executives_of_a_batch($id)
    {
        $page = 'Executives';

        // Check if the year group table is empty. If empty add 2019/20 year group
        $year_group_exists = YearGroup::get()->first();
        $year_group_for_id = YearGroup::where('id', $id)->get()->first();

//        dd($year_group_for_id);
//        dd($year_group_exists);

        if ($year_group_exists == null || $year_group_for_id == null)
        {
            return $this->get_executives();
        }

        $year_groups = YearGroup::all();

        // Selected year group id
        $year_group_id = $id;

        $executives = Executive::where('year_group_id', '=', $year_group_id)->get();
        $batch = YearGroup::where('id', '=', $year_group_id)
            ->get('year_group')
            ->first()
            ->year_group;

        return view('cms.executives')->with([
            'page' => $page,
            'year_groups' => $year_groups,
            'executives' => $executives,
            'batch' => $batch
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:5120'],
            'name' => ['required', 'string'],
            'program' => ['required', 'string'],
            'contact' => ['required', 'string'],
            'office' => ['required', 'string'],
            'year_group' => ['required', 'integer']
        ]);

        $file = $request->file('image');
        $formatted_image_name = str_replace(" ", "_", $file->getClientOriginalName());

        // Save image under different file name (using the date)
        $image_filename = date('YmdHi') . $formatted_image_name;

        // Always ensure directory exists before running this code.
        // Image::..->save(location) does not automatically create directory
        $location = public_path('images/executive/' . $image_filename);
        Image::make($file)->resize(720,720)->save($location);

        Executive::create([
            'photo' => $image_filename,
            'name' => $request->name,
            'program' => $request->program,
            'contact' => $request->contact,
            'office' => $request->office,
            'year_group_id' => $request->year_group
        ]);

        return back()->with('status', 'Executive added!');
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Executive $executive)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:5120'],
            'name' => ['required', 'string'],
            'program' => ['required', 'string'],
            'contact' => ['required', 'string'],
            'office' => ['required', 'string'],
            'year_group' => ['required', 'integer']
        ]);

        if ($request->file('image'))
        {
            $file = $request->file('image');
            $formatted_image_name = str_replace(" ", "_", $file->getClientOriginalName());

            // Save image under different file name (using the date)
            $image_filename = date('YmdHi') . $formatted_image_name;

            // Always ensure directory exists before running this code.
            // Image::..->save(location) does not automatically create directory
            $location = public_path('images/executive/' . $image_filename);
            Image::make($file)->resize(720,720)->save($location);
        }else{
            $image_filename = $executive->photo;
        }

        Executive::where('id', $executive->id)
            ->update([
                'photo' => $image_filename,
                'name' => $request->name,
                'program' => $request->program,
                'contact' => $request->contact,
                'office' => $request->office,
                'year_group_id' => $request->year_group
            ]);

        return back()->with('status', 'Executive added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Executive  $executive
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Executive $executive)
    {
        $executive->delete();

        return back()->with('status', 'Executive deleted!');
    }
}
