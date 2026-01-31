<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrixAttachmentController extends Controller
{
    /**
     * Store uploaded Trix attachments and return a public URL.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'attachment' => 'required|file|mimetypes:image/jpeg,image/png,image/gif,image/webp,image/svg+xml|max:5120',
        ]);

        $path = $validated['attachment']->store('trix-attachments', 'public');
        // Return a host-agnostic URL so the frontend can prefix the current origin (keeps ports).
        $publicUrl = '/storage/' . ltrim($path, '/');

        return response()->json([
            'url' => $publicUrl,
            'href' => $publicUrl,
        ], 201);
    }
}
