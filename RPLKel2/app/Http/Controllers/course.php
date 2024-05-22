<?php

namespace App\Http\Controllers;

use App\Models\coursechapter;
use Illuminate\Http\Request;

class course extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('course.course');
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
    public function show(coursechapter $coursechapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(coursechapter $coursechapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, coursechapter $coursechapter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(coursechapter $coursechapter)
    {
        //
    }
}
