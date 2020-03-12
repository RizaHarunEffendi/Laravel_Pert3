<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Mahasiswa</title>
</head>
<body>
    <br>
    <div class="container">
        <h1 class="text-center">Data Mahasiswa</h1>
    <form action="{{route('daftar-mahasiswa.index')}}">
            <select name="kelas" id="">
                <option value="" selected>Cari</option>
                <option value="6A">6A</option>
                <option value="6B">6B</option>
                <option value="6C">6C</option>
                <option value="6D">6D</option>
            </select>
            <input type="submit" class="btn btn-primary" value="cari">
        </form>
        <br>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                @php 
                    $no=1; 
                @endphp
                @forelse ($mahasiswa as $mhs)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$mhs['nama']}}</td>
                    <td>{{$mhs['kelas']}}</td>
               </tr>
                @empty
                    <td colspan="3"> Tidak ada Data</td>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>