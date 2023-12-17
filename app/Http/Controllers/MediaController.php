<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function showMediaPage()
    {
        return view('pages.media');
    }
}