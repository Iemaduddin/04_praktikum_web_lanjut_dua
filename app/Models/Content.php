<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    // public static function index()
    // {
    //     return Content::where('id', false)
    //         ->orderBy('id', 'desc');
    // }

    // public static function getBySlug($slug)
    // {
    //     return Content::where([
    //         'slug' => $slug,
    //         'draft' => false,
    //     ])->first();
    // }
}
