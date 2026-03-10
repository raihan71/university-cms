<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function frontgallery()
    {
        return view('pages.gallery');
    }
}
