@extends('master')
@section('title' , 'Detail Data')
    
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h5>Detail Data Mahasiswa</h5>
            </div>
            <div class="card-body">
                @foreach ($mahasiswas as $mhs)
                    <p>No    : {{$mhs['no']}}</p>
                    <p>Nama  : {{$mhs['nama']}}</p>
                    <p>Kelas : {{$mhs['kelas']}}</p>
                @endforeach
                
                <a href="{{ route('daftar-mahasiswa.index')}}" class="btn btn-outline-warning">Kembali</a>
            </div>
        </div>
    </div>
@endsection