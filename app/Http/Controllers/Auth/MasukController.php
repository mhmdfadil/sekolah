<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\MP;

class MasukController extends Controller
{
     public function index()
     {
         return view('login');
     }
     public function login(Request $request)
     {
         $validator = Validator::make($request->all(), [
             'email' => 'required|email',
             'password' => 'required|min:6',
         ]);
 
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }
 
         if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
             $userId = Auth::id(); 
             session(['user_id' => $userId]); 
 
             return redirect()->intended('/dashboard')->with('success', "Berhasil login! ID Anda: $userId");
         } else {
             return redirect()->back()->with('error', 'Email atau password salah!');
         }
     }
     public function logout()
     {
         Auth::logout();
         return redirect('/login');
     }
     public function dashboard()
    {
        $userId = Auth::id();  
        $user = User::find($userId); 
        $siswaJumlah = Siswa::count();
        $guruJumlah = Guru::count();
        $mpJumlah = MP::count();
    
        return view('dashboard', compact(
            'user', 
            'siswaJumlah',
            'guruJumlah',
            'mpJumlah',
        ));
    }
}
