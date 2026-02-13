<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;

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
        return view('pages.frontpage', [
            'services' => $services,
            'banners' => $banners
        ]);
    }
}
