<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->to('dashboard');
        }
        return view('auth.index');
    }
    
    public function redirect()
    {
        return Socialite::driver('google')
            ->redirect();
    }

    public function callback()
    {
        // Jika sudah login, langsung ke dashboard
        if (Auth::check()) {
            return redirect()->to('dashboard');
        }
        
        try {
            $user = Socialite::driver('google')->user();
            
            $id = $user->id;
            $email = $user->email;
            $name = $user->name;
            $avatar = $user->avatar;

          
            $finduser = User::where('email', $email)->first();
            
            if ($finduser) {
                $avatar_file = $id.".jpg";
                try {
                    $filecontent = file_get_contents($avatar);
                    if (!is_dir(public_path("admin/images/faces"))) {
                        File::makeDirectory(public_path("admin/images/faces"), 0755, true);
                    }
                    File::put(public_path("admin/images/faces/$avatar_file"), $filecontent);
                } catch (\Exception $fileError) {
                    $avatar_file = null;
                }
                $finduser->update([
                    'name' => $name,
                    'google_id' => $id,
                    'avatar' => $avatar_file
                ]);
                Auth::login($finduser);
                return redirect()->to('dashboard');
            } else {
                return redirect()->to('auth')->with('error', 'Akun yang kamu masukkan tidak diizinkan untuk menggunakan halaman Admin');
            }
        } catch (\Exception $e) {
            \Log::error('Login error: ' . $e->getMessage());
            return redirect()->to('auth')->with('error', 'Terjadi kesalahan saat login. Silakan coba lagi.');
        }
    }

    public function logout(){
        Auth::logout(); 
        return redirect()->to('auth');
    }
}
