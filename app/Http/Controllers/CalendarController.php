<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalendarAcademy;
use App\Models\CalendarActivityAcademy;

class CalendarController extends Controller
{
    public function index()
    {
        $calendars = CalendarActivityAcademy::orderBy('updated_at', 'desc')->paginate(10);
        $calendarDetail = CalendarAcademy::first();
        return view('pages.admin.calendar.index', [
            'calendars' => $calendars,
            'calendarDetail' => $calendarDetail
        ]);
    }

    public function create()
    {
        return view('pages.admin.calendar.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        $calendar = CalendarActivityAcademy::create($validated);
        return redirect()->route('portal-admin.calendar.index')->with('success', 'Jadwal Kegiatan Akademik berhasil ditambahkan.');
    }

    public function edit(CalendarActivityAcademy $calendar)
    {
        return view('pages.admin.calendar.edit', compact('calendar'));
    }

    public function details()
    {
        $calendarDetail = CalendarAcademy::first();
        return view('pages.admin.calendar.details', compact('calendarDetail'));
    }

    public function updateDetails(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $calendar = CalendarAcademy::findOrFail($id);
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('calendars', 'public');
            $validated['file'] = $filePath;
        }
        $calendar->update($validated);
        return redirect()->route('portal-admin.calendar.index')->with('success', 'Kalender Akademik berhasil diperbarui.');
    }

    public function update(Request $request, CalendarActivityAcademy $calendar)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        $calendar->update($validated);
        return redirect()->route('portal-admin.calendar.index')->with('success', 'Jadwal Kegiatan Akademik berhasil diperbarui.');
    }

    public function destroy(CalendarActivityAcademy $calendar)
    {
        $calendar->delete();
        return redirect()->route('portal-admin.calendar.index')->with('success', 'Jadwal Kegiatan Akademik berhasil dihapus.');
    }

    public function frontcalendar()
    {
        $calendarDetail = CalendarAcademy::first();
        $calendars = CalendarActivityAcademy::orderBy('date', 'asc')->get();
        return view('pages.calendar', compact('calendars', 'calendarDetail'));
    }
}
