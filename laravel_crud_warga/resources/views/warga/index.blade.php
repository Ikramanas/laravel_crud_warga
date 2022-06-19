<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman warga</title>
</head>
<body>
<h1>test halaman warga</h1>
    
<div class="container">
        
    <a href="warga/create">Tambah</a>
    <?php $no=1; ?>

        <table class="table">
        <thead>
            </thead>
            <tr>
                <th scope="row">No</th>
                <th scope="col">nama</th>
                <th scope="col">alamat</th>
                <th scope="col">jenis kelamin</th>
                <th scope="col">nomor telepon</th>
                <th scope="col">email</th>
                <th scope="col">Aksi</th>
            </tr>
            <tbody>
            @foreach( $warga as $w)
            <tr>
                <td scope="col">{{$no++}}</td>
                <td scope="col">{{$w->nama}}</td>
                <td scope="col">{{$w->alamat}}</td>
                <td scope="col">{{$w->jenis_kelamin}}</td>
                <td scope="col">{{$w->nomor_telepon}}</td>
                <td scope="col">{{$w->email}}</td>
                <td scope="col">{{$w->email}}</td>
                <td scope="col">
                    <a href="{{route('warga.edit',$w->id)}}">Edit</a> <br>
                        <form action="{{route('warga.hapus' ,$w->id)}}" method="post">
                            @csrf
                            @method('DELETE')   
                            <input type="submit" value="Hapus">
                        </form>                  
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</body>
</html>