<?php

namespace App\Http\Controllers;

use App\Mail\SendMailRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->paginate(10);

        return view('pages.admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('pages.admin.users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|string|max:50',
        ]);

        $password = $validated['password'];

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => $validated['role'],
            'password' => Hash::make($password),
        ]);

        $mailData = [
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
            'password' => $password,
        ];

        Mail::to($user->email)->send(new SendMailRegister($mailData));

        return redirect()
            ->route(
                'portal-admin.users.index'
            )
            ->with('success', 'User berhasil dibuat.');
    }

    public function edit(User $user)
    {
        return view('pages.admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'password' => 'nullable|string|min:6|confirmed',
            'role' => 'required|string|max:50',
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role = $validated['role'];

        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return redirect()
            ->route('portal-admin.users.index')
            ->with('success', 'User berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('portal-admin.users.index')
            ->with('success', 'User berhasil dihapus.');
    }
}
