<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $userId = Auth::id();  
        $user = User::find($userId); 
        $guru = Guru::all();
        return view('guru' , compact('user','guru'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
        ]);

        Guru::create([
            'name' => $request->name,
            'nip' => $request->nip,
        ]);

        return redirect()->route('guru')->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect()->route('guru')->with('success', 'Data guru berhasil dihapus.');
    }
}
