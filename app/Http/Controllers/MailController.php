<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;

class MailController extends Controller
{
    public function askQuestionProgram(Request $request)
    {
        $data = [
            'title' => 'Pertanyaan Masuk dari ' . $request->input('name'),
            'body' => 'Ada pertanyaan baru yang masuk.',
            'message' => $request->input('message'),
        ];

        Mail::to('raihannismara@gmail.com')->send(new SendEmail($data));

        return response()->json(['message' => 'Email berhasil dikirim.']);
    }
}
