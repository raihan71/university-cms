<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('pages.admin.news.index', compact('news'));
    }

    public function create()
    {
        $categories = [
            'Politics',
            'Sports',
            'Entertainment',
            'Technology',
            'Health',
            'Business',
            'Science',
            'World',
        ];
        return view('pages.admin.news.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'content' => 'required|string',
            'type' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->content = $request->content;
        $news->category = $request->category;
        $news->author = Auth()->user()->name; // Set author to currently logged-in user's name
        $news->type = $request->type;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
            $news->image = $imagePath;
        }

        // Generate slug from title
        $news->slug = \Str::slug($request->title);

        $news->save();

        return redirect()->route('portal-admin.news.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('portal-admin.news.index')->with('success', 'Berita berhasil dihapus.');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = [
            'Politics',
            'Sports',
            'Entertainment',
            'Technology',
            'Health',
            'Business',
            'Science',
            'World',
        ];
        return view('pages.admin.news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'content' => 'required|string',
            'type' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $news = News::findOrFail($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->content = $request->content;
        $news->category = $request->category;
        $news->author = Auth()->user()->name; // Update author to currently logged-in user's name
        $news->type = $request->type;
        $news->image = $news->image; // Keep existing image by default

        // Update slug from title
        $news->slug = \Str::slug($request->title);

        $news->save();

        return redirect()->route('portal-admin.news.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function frontnews()
    {
        $news = News::latest()->paginate(10);
        return view('pages.news', compact('news'));
    }

    public function frontnewsShow($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('pages.details.news_detail', compact('news'));
    }
}
