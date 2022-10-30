<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Executive;
use App\Models\Gallery;
use App\Models\Testimony;
use App\Models\WeeklyActivity;
use App\Models\YearGroup;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Home";
        $weekly_activities = WeeklyActivity::all();
        $testimonies = Testimony::all();
        $events = Event::all();
//        dd($testimonies);
        return view('index')->with([
            'page' => $page,
            'weekly_activities' => $weekly_activities,
            'testimonies' => $testimonies,
            'events' => $events
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function about(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "About";
        return view('about')->with([
            'page' => $page
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function news_events(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "News/Events";
        $events = Event::all();
        $weekly_activities = WeeklyActivity::all();
        return view('news_events')->with([
            'page' => $page,
            'events' => $events,
            'weekly_activities' => $weekly_activities
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function testimonies(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Testimonies";
        $testimonies = Testimony::all();
//        dd($testimonies);
        return view('testimonies')->with([
            'page' => $page,
            'testimonies' => $testimonies
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function gallery(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Gallery";
        $albums = Gallery::all();
        return view('gallery')->with([
            'page' => $page,
            'albums' => $albums
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function departments(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Departments";
        return view('departments')->with([
            'page' => $page
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function executives(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Executives";

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



        return view('executives')->with([
            'page' => $page,
            'year_groups' => $year_groups,
            'executives' => $executives,
            'batch' => $batch
        ]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function executives_for_batch(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $id = $request->year_group_id;

        $year_group_for_id = YearGroup::where('id', $id)->get()->first();

        if ($year_group_for_id == null)
        {
            return $this->executives();
        }

        $page = "Executives";

        $year_groups = YearGroup::all();

        // Selected year group id
        $year_group_id = $id;

        $executives = Executive::where('year_group_id', '=', $year_group_id)->get();
        $batch = YearGroup::where('id', '=', $year_group_id)
            ->get('year_group')
            ->first()
            ->year_group;

        return view('executives')->with([
            'page' => $page,
            'year_groups' => $year_groups,
            'executives' => $executives,
            'batch' => $batch
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function contact(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Contact";
        return view('contact')->with([
            'page' => $page
        ]);
    }

    public function sendEmail(Request $request)
    {

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function donate(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $page = "Donate";
        return view('donate')->with([
            'page' => $page
        ]);
    }
}
