<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;

class ScholarshipController extends Controller
{
    public function index()
    {
        $scholarships = Scholarship::latest()->paginate(10);
        return view('pages.admin.scholarships.index', compact('scholarships'));
    }

    public function create()
    {
        return view('pages.admin.scholarships.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|url',
            'content' => 'nullable|string',
        ]);

        Scholarship::create($validated);

        return redirect()->route('portal-admin.scholarships.index')->with('success', 'Berhasil menambahkan beasiswa.');
    }

    public function edit($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        return view('pages.admin.scholarships.edit', compact('scholarship'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|url',
            'content' => 'nullable|string',
        ]);

        $scholarship = Scholarship::findOrFail($id);
        $scholarship->update($validated);

        return redirect()->route('portal-admin.scholarships.index')->with('success', 'Berhasil memperbarui beasiswa.');
    }

    public function destroy($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        $scholarship->delete();

        return redirect()->route('portal-admin.scholarships.index')->with('success', 'Berhasil menghapus beasiswa.');
    }

    public function frontservicesShow()
    {
        $scholarships = Scholarship::latest()->get();
        $procedures = [
            'Memantau informasi pembukaan beasiswa melalui laman resmi/pengumuman kampus.',
            'Melengkapi berkas sesuai persyaratan dan menyerahkannya ke bagian Wakil Ketua III (Bidang Kemahasiswaan).',
            'Mengikuti tahap seleksi administrasi dan wawancara.',
        ];
        return view('pages.scholarships', compact('scholarships', 'procedures'));
    }
}
