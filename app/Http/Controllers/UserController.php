<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:20|min:3',
            'last_name'  => 'required|string|max:50|min:3',
            'email'      => 'required|string|email|max:255|unique:users',
            'role'       => 'required|in:client,owner',
            'password'   => 'required|string|min:8',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'role'       => $request->role,
            'password'   => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('profile');
    }


    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('profile');
        }

        $request->validate([
            'email'    => 'required|string|email|max:250',
            'password' => 'required|string|min:8|max:250',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (!Hash::check($request->password, $user->password)) {
                return redirect('/login')->with('password_error', 'Invalid password, try again');
            }

            Auth::login($user);
            $request->session()->regenerate();

            return redirect('/');
        }

        return redirect('/login')->with('email_error', 'Invalid email, try again');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function updateProfil(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Unauthorized');
        }

        $request->validate([
            'first_name' => 'required|string|max:20|min:3',
            'last_name'  => 'required|string|max:50|min:3',
        ]);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->save();

        return redirect()->route('profile')->with('success', 'Profil mis à jour avec succès');
    }
}
