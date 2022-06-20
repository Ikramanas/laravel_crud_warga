

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{ route("proses_login")}}" method="POST">
            @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input name="username" type="text" class="form-control-sm" id="exampleFormControlInput1" placeholder="Masukkan Username">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input name="password" type="text" class="form-control-sm" id="exampleFormControlInput1" placeholder="Masukkan Password">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Login</button>
        </div>
        </form>
    </div>
   
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>