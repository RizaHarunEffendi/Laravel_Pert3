<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request){
        $mahasiswa = [
            ['no' => '1', 'nama' => 'Mahasiswa1', 'kelas' => '6A'],
            ['no' => '2', 'nama' => 'Mahasiswa2', 'kelas' => '6B'],
            ['no' => '3', 'nama' => 'Mahasiswa3', 'kelas' => '6C'],
            ['no' => '4', 'nama' => 'Mahasiswa4', 'kelas' => '6D'],
        ];

        if($request->query('kelas')){
            $mahasiswa = array_filter($mahasiswa, function($kelas){
                return $kelas['kelas'] == request()->kelas;
            });
        }

        return view('mahasiswa', compact('mahasiswa'));
    }

    public function show($mahasiswa){
        $mahasiswas = [
            ['no' => '1', 'nama' => 'Mahasiswa1', 'kelas' => '6A'],
            ['no' => '2', 'nama' => 'Mahasiswa2', 'kelas' => '6B'],
            ['no' => '3', 'nama' => 'Mahasiswa3', 'kelas' => '6C'],
            ['no' => '4', 'nama' => 'Mahasiswa4', 'kelas' => '6D'],
        ];

        if($mahasiswa){
            $mahasiswas = array_filter($mahasiswas, function($id){
                return $id['no'] == request()->daftar_mahasiswa;
            });
        }
        return view('detail', compact('mahasiswas'));
    }
    // Create Data
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $nama = $request->nama;

        return redirect('daftar-mahasiswa')->with(['success' => 'Berhasil! Mahasiswa '.$nama.' berhasil ditambahkan']);
    }
    // Edit Data
    public function edit($mahasiswa){
        $mahasiswas = [
            ['no' => '1', 'nama' => 'Mahasiswa1', 'kelas' => '6A'],
            ['no' => '2', 'nama' => 'Mahasiswa2', 'kelas' => '6B'],
            ['no' => '3', 'nama' => 'Mahasiswa3', 'kelas' => '6C'],
            ['no' => '4', 'nama' => 'Mahasiswa4', 'kelas' => '6D'],
        ];

        if($mahasiswa){
            $mahasiswas = array_filter($mahasiswas, function($id){
                return $id['no'] == request()->daftar_mahasiswa;
            });
        }
        return view('edit', compact('mahasiswas'));
    }

    public function update(Request $request){
        if($request->old_name == $request->nama){
            return redirect('/daftar-mahasiswa')->with(['error' => 'Gagal! Nama masih sama.']);
        }else{
            return redirect('/daftar-mahasiswa')->with(['success' => 'Berhasil! mengubah '.$request->old_name.' menjadi '.$request->nama]);
        }
    }

    // Delete Data
    public function destroy(Request $request){
        $nama = $request->nama;
        return redirect('/daftar-mahasiswa')->with(['success' => 'Berhasil! Data '.$nama.' berhasil dihapus.']);

    }
}


