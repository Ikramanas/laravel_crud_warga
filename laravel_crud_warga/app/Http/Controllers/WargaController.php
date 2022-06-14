<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use Illuminate\Support\Facades\Sorage;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all();
        // dd($warga);
        return view('warga.index', compact(['warga']));
    }

    public function create()
    {
        return view('warga.create');
    }

    public function store(Request $request)
    {

        // Warga::create($request->except(['submit','token']));// cara 1 digunakan jika semua dapat diupload serentak


        $foto = $request->file('foto');
        $foto->storeAs('public/warga', $foto->hashName());
        Warga::create([
            'foto'  => $foto->hashName(),
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->warga,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'password' => $request->password
        ]);

        // return redirect('/warga'); // cara 1
        return redirect()->route('warga.index')->with(['success'=> 'Berhasil menyimpan data']);// cara ke 2
        
        
    }
}
