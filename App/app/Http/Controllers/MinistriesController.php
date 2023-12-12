<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ministry;

class MinistriesController extends Controller
{
    public function index()
    {
        $ministries = Ministry::all();

        return view('/ministries', compact('ministries'));
    }
}
