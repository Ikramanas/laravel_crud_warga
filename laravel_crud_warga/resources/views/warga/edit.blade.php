<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <h1>Edit data Warga</h1>
    <form action="/warga/update/{{$warga->id}}" method="POST" enctype="multipart/form-data" >
        @method('put')
        @csrf

               <input name="foto" type="file" placeholder="foto" value="{{$warga->foto}}">  <br>
               <input name="nama" type="text" placeholder="nama"value="{{$warga->nama}}">  <br>               
                <textarea name="alamat" id="" cols="30" rows="10">{{$warga->alamat}}</textarea> <br>                
                <input name="nomor_telepon" type="text" placeholder="nomor telepon" value="{{$warga->nomor_telepon}}"> 
                <br>     

                <select name="jenis_kelamin"> 
                   <option value="">Pilih Jenis kelamin</option>
                   <option value="L" @if($warga->jenis_kelamin=="L") selected @endif >Laki-laki</option>
                   <option value="P"  @if($warga->jenis_kelamin=="P") selected @endif >Perempuan</option>
                </select>   
                <br>      

               <input name="email" type="text" placeholder="email"> <br>
                <input name="password" type="text" placeholder="password"> <br>
               <input name="submit" type="submit" value="Save" placeholder=""> <br>
    </form>
</body>
</html>
