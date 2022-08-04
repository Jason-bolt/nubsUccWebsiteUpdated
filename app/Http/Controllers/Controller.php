<?php

namespace App\Http\Controllers;

use App\Models\WeeklyActivity;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Home";
        $weekly_activities = WeeklyActivity::all();
        return view('index')->with([
            'page' => $page,
            'weekly_activities' => $weekly_activities
        ]);
    }

    public function about(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "About";
        return view('about')->with([
            'page' => $page
        ]);
    }

    public function news_events(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "News/Events";
        return view('news_events')->with([
            'page' => $page
        ]);
    }

    public function gallery(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Gallery";
        return view('gallery')->with([
            'page' => $page
        ]);
    }

    public function departments(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Departments";
        return view('departments')->with([
            'page' => $page
        ]);
    }

    public function executives(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Executives";
        return view('executives')->with([
            'page' => $page
        ]);
    }

    public function contact(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Contact";
        return view('contact')->with([
            'page' => $page
        ]);
    }

    public function donate(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Donate";
        return view('donate')->with([
            'page' => $page
        ]);
    }
}
