<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'first_name' => 'required|string|max:20|min:3',
            'last_name'  => 'required|string|max:50|min:3',
            'email'      => 'required|string|email|max:255|unique:users',
            'password'   => 'required|string|min:8',
            'role'       => 'required|in:admin,owner,client',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'role'       => $request->role,
        ]);

        Auth::login($user);


        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        // dd($request->all());

        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('dashboardAdmin');
            }elseif ($user->role === 'owner') {
                return redirect()->route('dashboardOwner');
            } else {
                return redirect()->route('profile');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
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
