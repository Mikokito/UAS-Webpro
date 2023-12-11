<?php

namespace App\Http\Controllers;

use App\Models\Medias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Medias $medias)
    {
        $medias = Medias::all();
        return view('dashboard.medias.index', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.medias.create');
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
        
            $validatedData = Medias::create([
                'name' => $request->name,
                'link' => $request->link,
            ]);
            
            $validatedData->save();
            return redirect('/dashboard/medias');
            }
    

    /**
     * Display the specified resource.
     */
    public function show(Medias $medias)
    {
        return view('dashboard.medias.show', compact('medias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $medias = Medias::find($id);
        return view('dashboard.medias.edit', [
            'medias' => $medias,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medias $medias, $id)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);
        $medias = Medias::findOrFail($id);
        $medias->name = $request->name;
        $medias->link = $request->link;
        $medias->save();

        return redirect('/dashboard/medias')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $medias = Medias::find($id);
        $medias->delete();
        return redirect('/dashboard/medias');
    }
}
