<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        //
        return view('landing.index');
    }
    public function about()
    {
        //
        return view('landing.about');
    }
    public function blog()
    {
        //
        return view('landing.blog');
    }
    public function blog_single()
    {
        //
        return view('landing.blog-single');
    }
    public function competition()
    {
        //
        return view('landing.competition');
    }
    public function contact()
    {
        //
        return view('landing.contact');
    }
    public function details_club()
    {
        //
        return view('landing.details-club');
    }
    public function gallery()
    {
        //
        return view('landing.gallery');
    }
    public function pgfc()
    {
        //
        return view('landing.pgfc');
    }
    public function klasmen()
    {
        //
        return view('landing.klasmen');
    }
    public function result()
    {
        //
        return view('landing.result');
    }
    public function result_single()
    {
        //
        return view('landing.result-single');
    }
    public function team()
    {
        //
        return view('landing.team');
    }
    public function team_single()
    {
        //
        return view('landing.team-single');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
