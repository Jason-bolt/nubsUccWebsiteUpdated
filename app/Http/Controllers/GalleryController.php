<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show_albums()
    {
        $page = "Gallery";
        $albums = Gallery::all();
        return view('cms.gallery')->with([
            'page' => $page,
            'albums' => $albums
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
            'image' => ['required', 'image', 'max:5120'],
            'album' => ['required', 'string'],
            'link' => ['required', 'string', 'url']
        ]);

        $file = $request->file('image');
        $formatted_image_name = str_replace(" ", "_", $file->getClientOriginalName());

        // Save image under different file name (using the date)
        $image_filename = date('YmdHi') . $formatted_image_name;

        // Always ensure directory exists before running this code.
        // Image::..->save(location) does not automatically create directory
        $location = public_path('images/gallery/' . $image_filename);
        Image::make($file)->resize(200,200)->save($location);

        Gallery::create([
            'thumbnail' => $image_filename,
            'album' => $request->album,
            'link' => $request->link
        ]);

        return back()->with('status', 'Album added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
