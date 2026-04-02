<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
use App\Rules\ReCaptha;

class MailController extends Controller
{
    public function askQuestionProgram(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required', new ReCaptha],
        ]);

        $data = [
            'title' => 'Pertanyaan Masuk dari ' . $request->input('email'),
            'body' => 'Ada pertanyaan baru yang masuk terkait program.',
            'message' => $request->input('message'),
            'email' => $request->input('email'),
        ];

        Mail::to(config('mail.to_address'))->send(new SendEmail($data));

        return response()->json(['message' => 'Email berhasil dikirim.']);
    }

    public function contact(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required', new ReCaptha],
        ]);

        $data = [
            'title' => 'Kontak dari ' . $request->input('email'),
            'body' => 'Ada pesan baru yang masuk dari ' . $request->input('name') . '.',
            'message' => $request->input('message'),
            'email' => $request->input('email'),
        ];

        Mail::to(config('mail.to_address'))->send(new SendEmail($data));

        return response()->json(['message' => 'Email berhasil dikirim.']);
    }
}
