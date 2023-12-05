<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('service.index');
    }

    public function family()
    {
        return view('service.family');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function army()
    {
        return view('service.army');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function kids()
    {
        return view('service.kids');
    }

    /**
     * Display the specified resource.
     */
    public function senior()
    {
        return view('service.senior');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function media()
    {
        return view('service.media');
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
