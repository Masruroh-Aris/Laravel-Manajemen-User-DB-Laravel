<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Http\Request;

class AktivitasCont extends Controller
{
    public function index()
    {
        $data = Aktivitas::latest()->get();
        return view('aktivitas.index', compact('data'));
    }

    public function create()
    {
        return view('aktivitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_aktivitas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        Aktivitas::create($request->all());

        return redirect()->route('aktivitas')->with('success', 'Aktivitas berhasil ditambahkan');
    }
    public function edit($id)
    {
        $aktivitas = aktivitas::findOrFail($id);
        return view('aktivitas.edit',compact('aktivitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_aktivitas' => 'required|string|max:255',
            'deskripsi' => 'required|string', 
        ]);

        $aktivitas = aktivitas::findOrFail($id);
        $aktivitas->update($request->all());

        return redirect()->route('aktivitas')->with('success', 'Aktivitas berhasil di perbarui');
    }
    
    public function destroy($id)
    {
        $aktivitas = aktivitas::findOrFail($id);
        $aktivitas->delete();

        return redirect()->route('aktivitas')->with('success', 'Aaktivitas berhasil dihapus');
        
    }
    public function show($id) 
    {
        $aktivitas = aktivitas::findOrFail($id);
        return view ('aktivitas.show', compact('aktivitas'));
    }
}

//32.27