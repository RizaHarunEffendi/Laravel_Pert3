@extends('master')
@section('title', 'Daftar Mahasiswa')
    
@section('content')
    <div class="container mt-3">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                <span>{{ $message }}</span>
            </div>
        @elseif($message = Session::get('error'))
            <div class="alert alert-danger" role="alert">
                <span>{{ $message }}</span>
            </div>
        @endif

        <h1 class="text-center">Data Mahasiswa</h1>

        <a href="{{ route('daftar-mahasiswa.create') }}" class="btn btn-primary float-right">Tambah Data</a>

        <form action="{{route('daftar-mahasiswa.index')}}">
                <select name="kelas" class="form-control-sm" id="">
                    <option value="" selected>Semua</option>
                    <option value="6A">6A</option>
                    <option value="6B">6B</option>
                    <option value="6C">6C</option>
                    <option value="6D">6D</option>
                </select>
                <input type="submit" class="btn btn-success btn-sm" value="cari">
        </form>
        <br>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mahasiswa as $mhs)
                <tr>
                    <td>{{$mhs['no']}}</td>
                    <td>{{$mhs['nama']}}</td>
                    <td>{{$mhs['kelas']}}</td>
                    <td>
                        <form action="{{ route('daftar-mahasiswa.destroy', $mhs['no']) }}" method="post">
                            <a href="{{ route('daftar-mahasiswa.show', $mhs['no']) }}" class="btn btn-success btn-sm">Detail</a>
                            <a href="{{ route('daftar-mahasiswa.edit', $mhs['no']) }}" class="btn btn-warning btn-sm">Edit</a>
                        
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="hidden" value="{{$mhs['nama']}}" name="nama">
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="3"> Tidak ada Data</td>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
  
