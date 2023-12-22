<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class YoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Youtube $youtube)
    {
        $youtube = Youtube::all();
        return view('dashboard.youtube.index', compact('youtube'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.youtube.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
           ]);
    
           $validatedData = Youtube::create([
            'name' => $request->name,
            'link' => $request->link,
        ]);
    
           $validatedData->save();
           return redirect('/dashboard/youtube');
    }

    /**
     * Display the specified resource.
     */
    public function show(Youtube $youtube)
    {
        return view('dashboard.youtube.show', compact('youtube'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $youtube = Youtube::find($id);
        return view('dashboard.youtube.edit', [
            'youtube' => $youtube,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Youtube $youtube, $id)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);
        $youtube = Youtube::findOrFail($id);
        $youtube->name = $request->name;
        $youtube->link = $request->link;
        $youtube->save();

        return redirect('/dashboard/youtube')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $youtube = Youtube::find($id);
        $youtube->delete();
        return redirect('/dashboard/youtube');
    }
}
