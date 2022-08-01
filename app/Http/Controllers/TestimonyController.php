<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function testimonies()
    {
        $page = "Testimonies";
        $accepted_testimonies = Testimony::where('is_accepted', true)->get();
        $pending_testimonies = Testimony::where('is_accepted', false)->get();
        return view('cms.testimonies')->with([
            'page' => $page,
            'accepted_testimonies' => $accepted_testimonies,
            'pending_testimonies' => $pending_testimonies
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
            'image' => ['nullable', 'image', 'max:5120'],
            'name' => ['nullable', 'string'],
            'testimony' => ['required', 'string']
        ]);

        $name = $request->name == null ? 'Anonymous': $request->name;

        if ($request->file('image'))
        {
            $file = $request->file('image');
            $formatted_image_name = str_replace(" ", "_", $file->getClientOriginalName());
//            Save image under different file name (using the date)
            $image_filename = date('YmdHi') . $formatted_image_name;
            $location = public_path('images/testimony/' . $image_filename);
            Image::make($file)->resize(200,200)->save($location);

        }else{
            // Image was not provided
            $image_filename = null;
        }

//        dd();

        Testimony::create([
            'image' => $image_filename,
            'name' => $name,
            'testimony' => $request->testimony,
            'is_accepted' => false
        ]);

        return back()->with('status', 'Testimony added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show(Testimony $testimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimony $testimony)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimony $testimony)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimony $testimony)
    {
        dd($testimony);
    }
}
