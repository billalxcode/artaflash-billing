<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function action(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:4',
            'role' => 'required|string|exists:roles,name'
        ]);

        if (Auth::attempt($request->only(['email', 'password']))) {
            /**
             * @var \App\Models\User
             */
            $user = Auth::user();
            $role = $validated['role'];

            if ($role == 'admin' && $user->hasRole($role)) {
                return redirect()->route('admin.dashboard');
            }
        } else {
            toastr('email atau password tidak sesuai');

            return redirect()->back();
        }
    }
}
