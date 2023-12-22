<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showHomePage()
    {
        return view ('pages.home', [
            'posts' => Post::all()
        ]);
    }
}