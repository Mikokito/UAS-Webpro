<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Post $post)
    {
        $post = Post::all();
        return view('dashboard.posts.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|image|file',
       ]);

       $data = new Post();
       $data->name = $request->name;
       $data->description = $request->description;

       if($request->file('image')) {
        $data['image'] = $request->file('image')->store('post-image');

       $data->save();
       return redirect('/dashboard/posts');
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // $post = Post::all();
        // return view('dashboard.posts.index', compact('post'));
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('dashboard.posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|file',
        ];
        $data = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $data['image'] = $request->file('image')->store('post-image');
        }

        Post::where('id', $post->id)->update($data);

        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if($post->image) {
            Storage::delete($post->image);
        }
        $post->delete();
        return redirect('/dashboard/posts');
    }
}
