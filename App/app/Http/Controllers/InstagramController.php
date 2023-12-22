<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InstagramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Instagram $instagram)
    {
        $instagram = Instagram::all();
        return view('dashboard.instagram.index', compact('instagram'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.instagram.create');
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
    
           $validatedData = Instagram::create([
            'name' => $request->name,
            'link' => $request->link,
        ]);
    
           $validatedData->save();
           return redirect('/dashboard/instagram');
    }

    /**
     * Display the specified resource.
     */
    public function show(Instagram $instagram)
    {
        return view('dashboard.instagram.show', compact('instagram'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $instagram = Instagram::find($id);
        return view('dashboard.instagram.edit', [
            'instagram' => $instagram,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instagram $instagram, $id)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);
        $instagram = Instagram::findOrFail($id);
        $instagram->name = $request->name;
        $instagram->link = $request->link;
        $instagram->save();

        return redirect('/dashboard/instagram')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $instagram = Instagram::find($id);
        $instagram->delete();
        return redirect('/dashboard/instagram');
    }
}
