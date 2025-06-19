<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\MP;


class MPController extends Controller
{
    public function index()
    {
        $userId = Auth::id();  
        $user = User::find($userId); 
        $mp = MP::all();
        return view('mp' , compact('user','mp'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mp' => 'required|string|max:255',
        ]);

        MP::create([
            'mp' => $request->mp,
        ]);

        return redirect()->route('mp')->with('success', 'Data mata pelajaran berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $mp = MP::findOrFail($id);
        $mp->delete();
        return redirect()->route('mp')->with('success', 'Data mata pelajaran berhasil dihapus.');
    }
}
