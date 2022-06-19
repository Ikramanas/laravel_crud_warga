<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
    <h1>Create data Warga</h1>
    <div class="container">

        <form  action="{{ route('warga-store') }}" method="POST" enctype="multipart/form-data" >
            @csrf

            <input name="foto" type="file" placeholder="foto"> <br>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama </label>
                <input name="nama" type="text" class="form-control" placeholder="nama"> <br>               
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="" cols="30" rows="10">Alamat</textarea> <br>                
            </div>

            <div class="mb-3">
                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                <input name="nomor_telepon" type="text" placeholder="nomor telepon"> <br>     
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin"> 
                   <option value="">Pilih Jenis kelamin</option>
                   <option value="L">Laki-laki</option>
                   <option value="P">Perempuan</option>
                </select>
            </div>
    
                    <br>     
                   <input name="email" type="text" placeholder="email"> <br>
                    <input name="password" type="text" placeholder="password"> <br>
                   <input name="submit" type="submit" value="Save" placeholder=""> <br>
        </form>

    </div>
</body>
</html>
