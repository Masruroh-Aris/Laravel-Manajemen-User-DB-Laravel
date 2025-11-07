<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakCont extends Controller
{
    public function index()
    {
        return view('Kontak');
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string|max:500',
        ]);
        $nama = $request->nama;
        $email = $request->email;
        $pesan = $request->pesan;
        $text = urlencode("Halo, saya $nama ($email).\n\n$pesan");
        $nomor = '6282235474034';
        return redirect("https://wa.me/$nomor?text=$text");
    }
}
