<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\FacilityCategory;


class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::latest()->paginate(10);
        return view('pages.admin.facilities.index', compact('facilities'));
    }

    public function create()
    {
        $categories = FacilityCategory::getCategoryOptions();
        return view('pages.admin.facilities.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048',
            'category' => 'nullable|string|max:255',
        ]);

        $facility = Facility::create([
            'name' => $request->name,
            'category' => $request->category,
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('facilities', 'public');
            $facility->foto = $path;
        }

        $facility->save();

        return redirect()->route('portal-admin.facilities.index')->with('success', 'Fasilitas berhasil dibuat.');
    }

    public function show(Facility $facility)
    {
        return view('pages.admin.facilities.show', compact('facility'));
    }

    public function edit(Facility $facility)
    {
        $categories = FacilityCategory::getCategoryOptions();
        return view('pages.admin.facilities.edit', compact('facility', 'categories'));
    }

    public function update(Request $request, Facility $facility)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('facilities', 'public');
            $facility->foto = $path;
        }

        $facility->name = $request->name;
        $facility->category = $request->category;

        $facility->save();

        return redirect()->route('portal-admin.facilities.index')->with('success', 'Berhasil memperbarui fasilitas.');
    }

    public function destroy(Facility $facility)
    {
        $facility->delete();

        return redirect()->route('portal-admin.facilities.index')->with('success', 'Berhasil menghapus fasilitas.');
    }
}
