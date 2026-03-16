<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PMBDetails;
use App\Models\PMB;
use App\Models\University;

class PMBController extends Controller
{
    public function index()
    {
        $pmbs = PMB::latest()->paginate(10);
        $pmbDetail = PMBDetails::first();
        return view('pages.admin.pmb.index', compact('pmbs', 'pmbDetail'));
    }

    public function create()
    {
        return view('pages.admin.pmb.create');
    }

    public function store(Request $request)
    {
        $pmb = PMB::create($request->all());
        return redirect()->route('portal-admin.pmb.index')->with('success', 'PMB berhasil ditambahkan.');
    }

    public function detail()
    {
        $pmbDetail = PMBDetails::first();
        return view('pages.admin.pmb.edit', compact('pmbDetail'));
    }

    public function storeDetail(Request $request, $id)
    {
        $validated = $request->validate([
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'gambar' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $pmbDetail = PMBDetails::findOrFail($id);
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('pmb_details', 'public');
            $validated['file'] = $filePath;
        }
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('pmb_details', 'public');
            $validated['gambar'] = $imagePath;
        }
        $pmbDetail->update($validated);
        return redirect()->route('portal-admin.pmb.index')->with('success', 'Detail PMB berhasil diperbarui.');
    }

    public function destroy(PMB $pmb)
    {
        $pmb->delete();
        return redirect()->route('portal-admin.pmb.index')->with('success', 'PMB berhasil dihapus.');
    }

    public function frontpmbShow($pmb)
    {
        $pmbs = PMB::latest()->paginate(10);
        $pmbDetail = PMBDetails::first();
        $university = University::first();
        return view('pages.pmb', compact('pmbs', 'pmbDetail', 'pmb', 'university'));
    }
}
