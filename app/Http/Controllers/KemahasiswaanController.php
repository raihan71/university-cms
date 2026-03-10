<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kemahasiswaan;

class KemahasiswaanController extends Controller
{
    public function index()
    {
        $kemahasiswaans = Kemahasiswaan::latest()->paginate(10);
        return view('pages.admin.kemahasiswaan.index', compact('kemahasiswaans'));
    }

    public function create()
    {
        return view('pages.admin.kemahasiswaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|string',
        ]);

        Kemahasiswaan::create($request->all());
        return redirect()->route('portal-admin.kemahasiswaan.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Kemahasiswaan $kemahasiswaan)
    {
        return view('pages.admin.kemahasiswaan.edit', compact('kemahasiswaan'));
    }

    public function update(Request $request, Kemahasiswaan $kemahasiswaan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|string',
        ]);

        $kemahasiswaan->update($request->all());
        return redirect()->route('portal-admin.kemahasiswaan.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Kemahasiswaan $kemahasiswaan)
    {
        $kemahasiswaan->delete();
        return redirect()->route('portal-admin.kemahasiswaan.index')->with('success', 'Data berhasil dihapus');
    }

    public function frontservicesShow($service)
    {
        $service = Kemahasiswaan::where('link', $service)->firstOrFail();
        return view('pages.details.service_detail', ['kemahasiswaan' => $service]);
    }
}
