<?php

namespace App\Http\Controllers;

use App\Models\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FacebookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Facebook $facebook)
    {
        $facebook = Facebook::all();
        return view('dashboard.facebook.index', compact('facebook'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.facebook.create');
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
    
           $validatedData = Facebook::create([
            'name' => $request->name,
            'link' => $request->link,
        ]);
    
           $validatedData->save();
           return redirect('/dashboard/facebook');
    }

    /**
     * Display the specified resource.
     */
    public function show(Facebook $facebook)
    {
        return view('dashboard.facebook.show', compact('facebook'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $facebook = Facebook::find($id);
        return view('dashboard.facebook.edit', [
            'facebook' => $facebook,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facebook $facebook, $id)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);
        $facebook = Facebook::findOrFail($id);
        $facebook->name = $request->name;
        $facebook->link = $request->link;
        $facebook->save();

        return redirect('/dashboard/facebook')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $facebook = Facebook::find($id);
        $facebook->delete();
        return redirect('/dashboard/facebook');
    }
}
