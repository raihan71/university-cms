<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('pages.admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('pages.admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('gallery', 'public');
            $gallery->image = $imagePath;
        }

        $gallery->save();

        return redirect()->route('portal-admin.gallery.index')->with('success', 'Berhasil membuat galeri.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('portal-admin.gallery.index')->with('success', 'Berhasil menghapus galeri.');
    }

    public function frontgallery()
    {
        $galleries = Gallery::all();
        return view('pages.gallery', compact('galleries'));
    }
}
