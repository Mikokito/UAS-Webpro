<?php

namespace App\Http\Controllers;

use App\Models\Facebook;
use App\Models\Instagram;
use App\Models\Media;
use App\Models\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    public function showMediaPage() {
        return view('pages.media',[
            'youtubes' => Youtube::all(),
            'instagrams' => Instagram::all(),
            'facebooks' => Facebook::all()
        ]);
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index(Media $media)
    {
        $media = Media::all();
        return view('dashboard.media.index', compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'image' => 'required|image|file',
           ]);
    
           $validatedData = new Media();
           $validatedData->name = $request->name;
           $validatedData->link = $request->link;
           if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('media-image');
    
           $validatedData->save();
           return redirect('/dashboard/media');
           }
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        return view('dashboard.media.show', compact('media'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $media = Media::find($id);
        return view('dashboard.media.edit', [
            'media' => $media,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Media $media)
    {
        $aturan = [
            'name' => 'required',
            'link' => 'required',
            'image' => 'required|image|file',
        ];
        $validatedData = $request->validate($aturan);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('media-image');
        }

        Media::where('id', $media->id)->update($validatedData);

        return redirect('/dashboard/media')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $media = Media::find($id);
        if($media->image) {
            Storage::delete($media->image);
        }
        $media->delete();
        return redirect('/dashboard/media');
    }
}
