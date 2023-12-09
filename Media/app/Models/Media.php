<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Media extends Model implements HasMedia
{
    use HasMediaTrait;

    // ...
}


class Media extends Model
{
    use HasFactory;
}