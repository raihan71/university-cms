<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\News;

class EventsController extends Controller
{
    public function index()
    {
        $events = Events::latest()->paginate(10);
        return view('pages.admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('pages.admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'event_date' => 'required|date',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $event = new Events();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->event_date = $request->event_date;
        $event->location = $request->location;
        $event->slug = \Str::slug($request->title);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('events', 'public');
            $event->image = $path;
        }
        $event->save();

        return redirect()->route('portal-admin.events.index')->with('success', 'Acara berhasil dibuat.');
    }

    public function edit(Events $event)
    {
        return view('pages.admin.events.edit', compact('event'));
    }

    public function update(Request $request, Events $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'event_date' => 'required|date',
            'location' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $event->title = $request->title;
        $event->description = $request->description;
        $event->event_date = $request->event_date;
        $event->location = $request->location;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('events', 'public');
            $event->image = $path;
        }
        $event->save();

        return redirect()->route('portal-admin.events.index')->with('success', 'Acara berhasil diperbarui.');
    }

    public function destroy(Events $event)
    {
        $event->delete();
        return redirect()->route('portal-admin.events.index')->with('success', 'Acara berhasil dihapus.');
    }

    public function frontevents()
    {
        $events = Events::latest()->paginate(10);
        return view('pages.events', compact('events'));
    }

    public function fronteventsShow($slug)
    {
        $event = Events::where('slug', $slug)->firstOrFail();
        $hotNews = News::inRandomOrder()->take(5)->get();

        return view('pages.details.event_detail', compact('event', 'hotNews'));
    }
}
