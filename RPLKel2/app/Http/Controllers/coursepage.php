<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class coursepage extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($viewName)
    {
    
        $views = [
            "matematika"
        ];

        if(in_array($viewName, $views)){
            return view("course.".$viewName);
        }else{
            abort(404);
        }
        
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
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(course $course)
    {
        //
    }
}
