@extends('master')
@section('title' , 'Edit Data')
    
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h5>Edit Data Mahasiswa</h5>
            </div>
            <div class="card-body">
                @foreach ($mahasiswas as $dt)
                <form action="{{ route('daftar-mahasiswa.update' , $dt['no']) }}" method="post">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="old_name" value="{{ $dt['nama'] }}">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Nama :</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$dt['nama']}}" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Kelas :</label>
                                <input type="text" class="form-control" name="kelas" placeholder="Kelas" value="{{$dt['kelas']}}" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form> 
                @endforeach           
            </div>
        </div>
    </div>
@endsection