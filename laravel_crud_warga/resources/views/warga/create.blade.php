<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Create data Warga</h1>
    <form action="{{ route('warga-store') }}" method="POST" enctype="multipart/form-data" >
        @csrf

               <input name="foto" type="file" placeholder="foto"> <br>
               <input name="nama" type="text" placeholder="nama"> <br>               
                <textarea name="alamat" id="" cols="30" rows="10">Alamat</textarea> <br>                
                <input name="nomor_telepon" type="text" placeholder="nomor telepon"> <br>     

                <select name="jenis_kelamin"> 
                   <option value="">Pilih Jenis kelamin</option>
                   <option value="L">Laki-laki</option>
                   <option value="P">Perempuan</option>
                </select>
                <br>      

               <input name="email" type="text" placeholder="email"> <br>
                <input name="password" type="text" placeholder="password"> <br>
               <input name="submit" type="submit" value="Save" placeholder=""> <br>
    </form>
</body>
</html>
