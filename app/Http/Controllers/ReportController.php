<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events=Report::all();
        return view("dashboard.events.index",compact("events"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events=Report::orderBy("title","desc")->get();
        return view("dashboard.events.report",compact("events"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event=Report::create([
            'title'=>request()->title,
            'venue'=>request()->venue,
            'from'=>request()->from,
            'to'=>request()->to,
        ]);
        if (request()->hasFile('cover')) {
            $extension = request()->file('cover')->getClientOriginalExtension();
            $cover = uniqid().time(). '.' . $extension;
            request()->file('cover')->storeAs('public/reports/covers', $cover);
            $event->cover = $cover;
            $event->update();
        }
        return redirect('/dashboard');
    }
    public function show($id)
    {
        $event=Report::findOrFail($id);
        return view('dashboard.events.show',compact('event'));
    }

    public function edit($id)
    {
        $event=Report::findOrFail($id);
        return view('dashboard.events.edit',compact('event'));
    }

    public function update()
    {
        $event=Report::findOrFail(request()->event_id);
        if(request()->has('report')){
            $event->report = request()->report;
        }
        if(request()->has('to')){
            $event->to = request()->to;
        }
        if (request()->hasFile('cover')) {
            $extension = request()->file('cover')->getClientOriginalExtension();
            $cover = uniqid().time(). '.' . $extension;
            request()->file('cover')->storeAs('public/reports/covers', $cover);
            $event->cover = $cover;
        }
        $event->update();
        return redirect('/dashboard')->with('success','Report stored successifully');
    }

    public function destroy(Report $report)
    {
        //
    }
}
