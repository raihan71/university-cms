<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partners;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partners::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('pages.admin.partners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $logoPath = $request->file('logo')->store('partners', 'public');

        Partners::create([
            'name' => $request->input('name'),
            'logo' => $logoPath,
        ]);

        return redirect()->route('portal-admin.partners.index')->with('success', 'Berhasil menambahkan partner.');
    }

    public function edit(Partners $partner)
    {
        return view('pages.admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, Partners $partner)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('partners', 'public');
            $partner->logo = $logoPath;
        }

        $partner->name = $request->input('name');
        $partner->save();

        return redirect()->route('portal-admin.partners.index')->with('success', 'Berhasil memperbarui partner.');
    }

    public function destroy(Partners $partner)
    {
        $partner->delete();
        return redirect()->route('portal-admin.partners.index')->with('success', 'Berhasil menghapus partner.');
    }
}
