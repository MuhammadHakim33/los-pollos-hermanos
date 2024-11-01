<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    //LOGIN_METHOD
    public function showLoginForm()
    {
        return view('user.auth.login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    //REGISTER_METHOD
    public function showRegistrationForm()
    {
        return view('user.auth.register.register');
    }

    public function register(Request $request)
    {
        // Validasi data registrasi
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'email_regis' => 'required|string|email:dns|max:255|unique:users,email',
            'password_regis' => 'required|string|min:8',
            'alamat' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kelurahan' => 'required|string|max:255',
        ]);

        // Buat pengguna baru di database
        $user = User::create([
            'name' => $request->nama,
            'email' => $request->email_regis,
            'password' => Hash::make($request->password_regis),
            'phone' => $request->no_telp,
            'role' => 'user',
        ]);

        $user_address = Address::create([
            'id_user' => $user->id,
            'detail' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
        ]);

        // Autentikasi pengguna yang baru terdaftar
        Auth::login($user);

        // Redirect ke dashboard atau halaman lainnya
        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    //Resetpassword
    // public function showResetPasswordForm()
    // {
    //     return view('user.auth.resetPW.reset'); 
    // }

    // public function sendResetLink(Request $request)
    // {
    //     $request->validate(['email' => 'required|email']);

    //     $status = Password::sendResetLink(
    //         $request->only('email')
    //     );

    //     return $status === Password::RESET_LINK_SENT
    //         ? back()->with(['status' => __($status)])
    //         : back()->withErrors(['email' => __($status)]);
    // }
}
