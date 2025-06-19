<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Kelas;


class KelasController extends Controller
{
    public function index()
    {
        $userId = Auth::id();  
        $user = User::find($userId); 
        $kelas = Kelas::all();
        return view('kelas' , compact('user','kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tingkatan' => 'required|string|max:255',
            'unit' => 'required|string|max:255',
        ]);

        Kelas::create([
            'tingkatan' => $request->tingkatan,
            'unit' => $request->unit,
        ]);

        return redirect()->route('kelas')->with('success', 'Data kelas berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas')->with('success', 'Data kelas berhasil dihapus.');
    }
}
