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

        // dd($request);
        $foto = $request->file('foto');
        $foto->storeAs('public/warga', $foto->hashName());
        Warga::create([
            'foto'  => $foto->hashName(),
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'password' => $request->password
        ]);

        // return redirect('/warga'); // cara 1
        return redirect()->route('warga.index')->with(['success'=> 'Berhasil menyimpan data']);// cara ke 2
        
        
    }

    public function edit($id)
    {
        $warga = Warga::find($id);
        // dd($warga);
       return view('warga.edit', compact(['warga']));
    }

    public function update($id, Request $request)
    {
        $warga = Warga::find($id);

        // dd($request);
        
        if ($request->hasFile('foto')) {
            // dd($foto);
        $foto = $request->file('foto');
        $foto->storeAs('public/warga', $foto->hashName());  
        $warga->update([
            'foto'  => $foto->hashName(),
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'password' => $request->password
        ]);
        }else {
        $warga->update($request->except(['_token','submit','file("foto")']));
        }
        return redirect()->route('warga.index')->with(['success' => 'Data berhasil diubah!']);
    }

    public function destroy($id)
    {
        $warga = Warga::find($id);
        $warga->delete();
        return redirect()->route('warga.index')->with(['success' => 'Data berhasil dihapus..']);
    }
}
