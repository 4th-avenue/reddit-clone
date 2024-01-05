<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($community_slug, $slug)
    {
        dd($community_slug, $slug);
    }
}
