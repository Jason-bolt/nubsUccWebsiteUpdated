<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "home";
        return view('index')->with([
            'page' => $page
        ]);
    }

    public function about(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "about";
        return view('about')->with([
            'page' => $page
        ]);
    }

    public function news_events(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "news_events";
        return view('news_events')->with([
            'page' => $page
        ]);
    }

    public function gallery(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "gallery";
        return view('gallery')->with([
            'page' => $page
        ]);
    }

    public function departments(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "departments";
        return view('departments')->with([
            'page' => $page
        ]);
    }

    public function executives(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "executives";
        return view('executives')->with([
            'page' => $page
        ]);
    }

    public function contact(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "contact";
        return view('contact')->with([
            'page' => $page
        ]);
    }

    public function donate(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "donate";
        return view('donate')->with([
            'page' => $page
        ]);
    }
}
