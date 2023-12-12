<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function showMediaPage()
    {
        $videoIds = [
        'TBLf1SyHczg',
        '4JrNbn7UIzg',
        'M14lDLZKtzo',
        '91lM_z2eWxE',
        'GXrFhj15c8g',
        '0B-rjMLqYhc',
        ];

        return view('/media')->with('videoIds', $videoIds);
    }
}