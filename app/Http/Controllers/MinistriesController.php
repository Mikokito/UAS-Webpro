<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinistriesController extends Controller
{
    public function showMinistriesPage()
    {
        return view('pages.ministries');
    }
}