<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
    function index()
    {
        $socials = Social::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.socials.index', compact('socials'));
    }

    function create()
    {
        return view('pages.admin.socials.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|url',
        ]);

        $request->merge(['name' => strtolower($request->name)]);

        Social::create($request->all());
        return redirect()->route('portal-admin.socials.index')->with('success', 'Social link created successfully.');
    }

    function edit(Social $social)
    {
        return view('pages.admin.socials.edit', compact('social'));
    }

    function update(Request $request, Social $social)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|url',
        ]);

        $social->update($request->all());
        return redirect()->route('portal-admin.socials.index')->with('success', 'Social link updated successfully.');
    }

    function destroy(Social $social)
    {
        $social->delete();
        return redirect()->route('portal-admin.socials.index')->with('success', 'Social link deleted successfully.');
    }
}
