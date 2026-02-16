<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Banners;
use App\Models\Teacher;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('pages.admin.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'string',
            'content' => 'string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $course = new Course();
        $course->name = $request->name;
        $course->slug = \Str::slug($request->name);
        $course->description = $request->description;
        $course->content = $request->content;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('courses', 'public');
            $course->image = $path;
        }

        $course->save();

        return redirect()->route('portal-admin.courses.index')->with('success', 'Program berhasil dibuat');
    }

    public function edit($id)
    {
        $courses = Course::findOrFail($id);
        return view('pages.admin.courses.edit', compact('courses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);

        $courses = Course::findOrFail($id);
        $courses->name = $request->name;
        $courses->description = $request->description;
        $courses->content = $request->content;
        $courses->slug = \Str::slug($request->name);
        $courses->save();

        return redirect()->route('portal-admin.courses.index')->with('success', 'Program berhasil diperbarui');
    }

    public function destroy($id)
    {
        $courses = Course::findOrFail($id);
        $courses->delete();

        return redirect()->route('portal-admin.courses.index')->with('success', 'Program berhasil dihapus');
    }

    public function frontcourse()
    {
        $courses = Course::paginate(6);
        return view('pages.courses', compact('courses'));
    }

    public function frontcourseShow($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $banners = Banners::where('status', 1)
            ->where('type', $slug)
            ->get();

        $teachers = Teacher::orderBy('name')->where('prodi', $course->slug)->get();

        return view('pages.details.course_detail', [
            'course' => $course,
            'banners' => $banners,
            'teachers' => $teachers
        ]);
    }
}
