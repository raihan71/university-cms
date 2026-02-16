<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::latest()->paginate(10);
        return view('pages.admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('pages.admin.teachers.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:teachers',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'prodi' => 'nullable|string|max:100',
            'subject' => 'nullable|string|max:100',
            'linkedin' => 'nullable|string|max:100',
            'twitter' => 'nullable|string|max:100',
            'instagram' => 'nullable|string|max:100',
            'facebook' => 'nullable|string|max:100',
            'website' => 'nullable|string|max:100',
            'role' => 'nullable|string|max:100',
        ]);

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->bio = $request->bio;
        $teacher->phone = $request->phone;
        $teacher->address = $request->address;
        $teacher->email = $request->email;
        $teacher->prodi = $request->prodi;
        $teacher->subject = $request->subject;
        $teacher->linkedin = $request->linkedin;
        $teacher->twitter = $request->twitter;
        $teacher->instagram = $request->instagram;
        $teacher->facebook = $request->facebook;
        $teacher->website = $request->website;
        $teacher->slug = \Str::slug($request->name);
        $teacher->role = $request->role;
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('teachers', 'public');
            $teacher->photo = $path;
        }

        $teacher->save();

        return redirect()->route('portal-admin.teachers.index')->with('success', 'Penambahan pengajar berhasil.');
    }

    public function edit(Teacher $teacher)
    {
        return view('portal-admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:teachers,email,' . $teacher->id,
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'prodi' => 'nullable|string|max:100',
            'subject' => 'nullable|string|max:100',
            'linkedin' => 'nullable|string|max:100',
            'twitter' => 'nullable|string|max:100',
            'instagram' => 'nullable|string|max:100',
            'facebook' => 'nullable|string|max:100',
            'website' => 'nullable|string|max:100',
            'slug' => 'required|string|max:255|unique:teachers,slug,' . $teacher->id,
            'role' => 'nullable|string|max:100',
        ]);

        $teacher->update($validated);

        return redirect()->route('portal-admin.teachers.index')->with('success', 'Teacher updated successfully.');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('portal-admin.teachers.index')->with('success', 'Teacher deleted successfully.');
    }
}
