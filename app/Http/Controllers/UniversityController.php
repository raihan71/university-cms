<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use Illuminate\Support\Facades\Storage;

class UniversityController extends Controller
{

    public function settings()
    {
        $universities = University::firstOrFail();
        return view('pages.admin.dashboard.setting', compact('universities'));
    }

    public function updateSettings(Request $request)
    {
        $university = University::firstOrFail();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:255',
            'count_teacher' => 'nullable|string|max:255',
            'count_student' => 'nullable|string|max:255',
            'count_program' => 'nullable|string|max:255',
            'count_alumni' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'history' => 'nullable|string',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'accreditation' => 'nullable|string',
            'structure' => 'nullable|string',
            'identity' => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $university->update($validatedData);

        return redirect()->route('portal-admin.settings.index')->with('success', 'Data kampus berhasil diperbarui.');
    }
}
