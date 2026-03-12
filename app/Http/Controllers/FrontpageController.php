<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\Course;
use App\Models\Events;
use App\Models\Facility;
use App\Models\FacilityCategory;
use App\Models\News;
use App\Models\Partners;
use App\Models\University;
use App\Models\Social;

class FrontpageController extends Controller
{
    /**
     * Show the frontpage.
     */
    public function index()
    {
        $services = [
            [
                'title' => 'Program Beasiswa',
                'description' => 'Tersedia program beasiswa untuk mahasiswa berprestasi.',
                'icon' => 'fa-graduation-cap'
            ],
            [
                'title' => 'Dosen Berkualitas',
                'description' => 'Dosen-dosen kami berpengalaman dan ahli di bidangnya.',
                'icon' => 'fa-group'
            ],
            [
                'title' => 'Fasilitas Lengkap',
                'description' => 'Mulai dari perpustakaan, hingga ruang kelas yang nyaman.',
                'icon' => 'fa-book'
            ]
        ];
        $banners = Banners::where('status', 1)
            ->where('type', 'image')
            ->latest()
            ->take(3)
            ->get();
        $courses = Course::orderBy('created_at', 'desc')->take(4)->get();
        $newses = News::orderBy('created_at', 'desc')->take(3)->get();
        $events = Events::orderBy('created_at', 'desc')->take(2)->get();
        $university = University::firstOrFail();
        $partners = Partners::orderBy('created_at', 'desc')->get();
        $socials = Social::where('name', '=', 'youtube video-tour')->orderBy('name')->get();

        return view('pages.frontpage', [
            'services' => $services,
            'banners' => $banners,
            'courses' => $courses,
            'newses' => $newses,
            'events' => $events,
            'university' => $university,
            'partners' => $partners,
            'socials' => $socials,
        ]);
    }

    public function frontrules()
    {
        $university = University::firstOrFail();

        return view('pages.rules', [
            'university' => $university,
        ]);
    }

    public function frontfacilities()
    {
        $facilities = Facility::all();
        $facilitiesCategories = FacilityCategory::getCategoryOptions();
        return view('pages.facilities', [
            'facilities' => $facilities,
            'facilitiesCategories' => $facilitiesCategories,
        ]);
    }

    public function frontcontact()
    {
        $university = University::firstOrFail();
        return view('pages.contact', [
            'university' => $university,
        ]);
    }
}
