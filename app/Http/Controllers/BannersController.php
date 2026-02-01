<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;
use Illuminate\Support\Facades\Storage;

class BannersController extends Controller
{
    public function index()
    {
        $banners = Banners::paginate(5);
        return view('pages.admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('pages.admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url',
            'status' => 'required|in:1,0',
            'type' => 'required|in:image,video',
        ]);

        $banner = new Banners();
        $banner->title = $request->title;
        $banner->subtitle = $request->subtitle;
        $banner->link = $request->link;
        $banner->status = $request->status;
        $banner->type = $request->type;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('banners', 'public');
            $banner->image = $path;
        }

        $banner->save();

        return redirect()->route('portal-admin.banners.index')->with('success', 'Banner berhasil dibuat.');
    }

    public function edit($id)
    {
        $banner = Banners::findOrFail($id);
        return view('pages.admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banners::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url',
            'status' => 'required|in:1,0',
            'type' => 'required|in:image,video',
        ]);

        $banner->title = $request->title;
        $banner->subtitle = $request->subtitle;
        $banner->link = $request->link;
        $banner->status = $request->status;
        $banner->type = $request->type;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('banners', 'public');
            $banner->image = $path;
        }

        $banner->save();

        return redirect()->route('portal-admin.banners.index')->with('success', 'Banner berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $banner = Banners::findOrFail($id);
        $banner->delete();

        return redirect()->route('portal-admin.banners.index')->with('success', 'Banner berhasil dihapus.');
    }
}
