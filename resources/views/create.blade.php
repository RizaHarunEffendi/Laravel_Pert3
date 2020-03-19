@extends('master')
@section('title' , 'Tambah Data')
    
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Data Mahasiswa</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('daftar-mahasiswa.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Nama :</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Kelas :</label>
                                <input type="text" class="form-control" name="kelas" placeholder="Kelas" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>             
            </div>
        </div>
    </div>
@endsection