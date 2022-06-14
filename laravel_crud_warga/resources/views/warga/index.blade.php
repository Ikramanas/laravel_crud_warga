<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman warga</title>
</head>
<body>
    <h1>test halaman warga</h1>
    <a href="warga/create">Tambah</a>
    <table border="1">
        <tr>
            <th>nama</th>
            <th>alamat</th>
            <th>jenis kelamin</th>
        </tr>
        @foreach( $warga as $w)
        <tr>
            <td>{{$w->nama}}</td>
            <td>{{$w->alamat}}</td>
            <td>{{$w->jenis_kelamin}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>