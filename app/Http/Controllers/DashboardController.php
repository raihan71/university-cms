<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\Events;
use App\Models\News;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            [
                'label' => 'Teachers',
                'count' => Teacher::count(),
                'icon' => 'chalkboard-teacher',
                'color' => 'primary',
            ],
            [
                'label' => 'Banners',
                'count' => Banners::count(),
                'icon' => 'image',
                'color' => 'success',
            ],
            [
                'label' => 'Events',
                'count' => Events::count(),
                'icon' => 'calendar-alt',
                'color' => 'info',
            ],
            [
                'label' => 'News Articles',
                'count' => News::count(),
                'icon' => 'newspaper',
                'color' => 'warning',
            ],
        ];
        $logEntries = $this->getRecentLogEntries(200);
        $logs = $this->paginateLogs($logEntries);

        return view('pages.admin.dashboard.index', compact('stats', 'logs'));
    }

    public function profile()
    {
        return view('pages.admin.dashboard.profile');
    }

    protected function getRecentLogEntries(int $lines = 200): array
    {
        $logPath = storage_path('logs/laravel.log');
        if (!File::exists($logPath)) {
            return [];
        }

        $file = new \SplFileObject($logPath, 'r');
        $file->seek(PHP_INT_MAX);
        $lastLine = $file->key();
        $lines = min($lines, $lastLine + 1);

        $entries = [];
        for ($line = $lastLine; $line >= 0 && count($entries) < $lines; $line--) {
            $file->seek($line);
            $content = trim($file->current());
            if ($content !== '') {
                $entries[] = $content;
            }
        }

        return array_reverse($entries);
    }

    protected function paginateLogs(array $entries, int $perPage = 15, string $pageName = 'logs_page'): LengthAwarePaginator
    {
        $currentPage = LengthAwarePaginator::resolveCurrentPage($pageName);
        $offset = max(0, ($currentPage - 1) * $perPage);
        $items = array_slice($entries, $offset, $perPage);

        return new LengthAwarePaginator(
            $items,
            count($entries),
            $perPage,
            $currentPage,
            [
                'path' => request()->url(),
                'pageName' => $pageName,
            ]
        );
    }
}
