<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request){
        $mahasiswa = [
            ['nama' => 'Mahasiswa1', 'kelas' => '6A'],
            ['nama' => 'Mahasiswa2', 'kelas' => '6B'],
            ['nama' => 'Mahasiswa3', 'kelas' => '6C'],
            ['nama' => 'Mahasiswa4', 'kelas' => '6D'],
        ];

        if($request->query('kelas')){
            $mahasiswa = array_filter($mahasiswa, function($kelas){
                return $kelas['kelas'] == request()->kelas;
            });
        }

        return view('mahasiswa', compact('mahasiswa'));
    }

    public function show($daftarmahasiswa){
        $mahasiswa = [
            ['nama' => 'Mahasiswa1', 'kelas' => '6A'],
            ['nama' => 'Mahasiswa2', 'kelas' => '6B'],
            ['nama' => 'Mahasiswa3', 'kelas' => '6C'],
            ['nama' => 'Mahasiswa4', 'kelas' => '6D'],
        ];

        if($daftarmahasiswa){
            $mahasiswa = array_filter($mahasiswa, function($kelas){
                return $kelas['kelas'] == request()->segment(count(request()->segments()));
            });
        }
        return view('mahasiswa', compact('mahasiswa'));
    }
}


