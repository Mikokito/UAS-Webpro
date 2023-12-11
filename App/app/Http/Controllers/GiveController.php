<?php

namespace App\Http\Controllers;

use App\Models\Give;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Give $give)
    {
        $give = Give::all();
        return view('dashboard.Give.index', compact('give'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.give.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
           ]);
    
           $validatedData = Give::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
           $validatedData->save();
           return redirect('/dashboard/give');
    }

    /**
     * Display the specified resource.
     */
    public function show(Give $give)
    {
        return view('dashboard.give.show', compact('give'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $give = Give::find($id);
        return view('dashboard.Give.edit', [
            'give' => $give,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $give = Give::findOrFail($id);
        $give->name = $request->name;
        $give->description = $request->description;
        $give->save();

        return redirect('/dashboard/give')->with('success', 'No. Rek has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $give = Give::find($id);
        $give->delete();
        return redirect('/dashboard/give');
    }
}
