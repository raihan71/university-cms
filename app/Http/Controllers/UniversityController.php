<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

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
            $resizedContent = $this->resizeAndCompress(
                $request->file('logo'),
                200,
                300,
                70, // JPEG quality
                9   // PNG compression (0-9)
            );

            $filename = uniqid('logo_') . '.' . $request->file('logo')->getClientOriginalExtension();
            $path = 'logos/' . $filename;

            if ($resizedContent !== null) {
                Storage::disk('public')->put($path, $resizedContent);
                $validatedData['logo'] = $path;
            } else {
                // Fall back to original store if we cannot resize/compress
                $validatedData['logo'] = $request->file('logo')->store('logos', 'public');
            }
        }

        $university->update($validatedData);

        return redirect()->route('portal-admin.settings.index')->with('success', 'Data kampus berhasil diperbarui.');
    }

    private function resizeAndCompress(
        UploadedFile $file,
        int $maxWidth,
        int $maxHeight,
        int $jpegQuality = 75,
        int $pngCompression = 9
    ): ?string {
        $imageData = @file_get_contents($file->getRealPath());

        if ($imageData === false) {
            return null;
        }

        $source = @imagecreatefromstring($imageData);

        if ($source === false) {
            return null;
        }

        $origWidth = imagesx($source);
        $origHeight = imagesy($source);
        $ratio = min($maxWidth / $origWidth, $maxHeight / $origHeight, 1);
        $newWidth = max(1, (int)($origWidth * $ratio));
        $newHeight = max(1, (int)($origHeight * $ratio));

        $canvas = imagecreatetruecolor($newWidth, $newHeight);

        if (!$canvas) {
            imagedestroy($source);
            return null;
        }

        $mime = $file->getMimeType();
        if (in_array($mime, ['image/png', 'image/gif', 'image/webp'])) {
            imagealphablending($canvas, false);
            imagesavealpha($canvas, true);
            $transparent = imagecolorallocatealpha($canvas, 0, 0, 0, 127);
            imagefill($canvas, 0, 0, $transparent);
        }

        imagecopyresampled(
            $canvas,
            $source,
            0,
            0,
            0,
            0,
            $newWidth,
            $newHeight,
            $origWidth,
            $origHeight
        );

        ob_start();
        switch ($mime) {
            case 'image/png':
                imagepng($canvas, null, $pngCompression);
                break;
            case 'image/gif':
                imagegif($canvas);
                break;
            case 'image/webp':
                if (function_exists('imagewebp')) {
                    imagewebp($canvas, null, $jpegQuality);
                    break;
                }
                // fallthrough to jpeg if webp not supported
            default:
                imagejpeg($canvas, null, $jpegQuality);
                break;
        }
        $resizedContent = ob_get_clean();

        imagedestroy($source);
        imagedestroy($canvas);

        return $resizedContent ?: null;
    }
}
