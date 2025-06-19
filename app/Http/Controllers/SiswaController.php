<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $userId = Auth::id();  
        $user = User::find($userId); 
        $siswa = Siswa::all();
        return view('siswa' , compact('user','siswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nisn' => 'required|string|max:255',
        ]);

        Siswa::create([
            'name' => $request->name,
            'nisn' => $request->nisn,
        ]);

        return redirect()->route('siswa')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa')->with('success', 'Data siswa berhasil dihapus.');
    }
}
