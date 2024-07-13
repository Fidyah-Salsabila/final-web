<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/dist/css/adminlte.min.css') }}">
</head>
<body>
    <div class="container d-flex vh-100" style="background-image: url({{ asset('') }})" >
        <div class="card m-auto p-4" style="width: 500px;" >
            @session('error')
            <div class="alert alert-danger" role="alert">
                Username atau password salah
            </div>
            @endsession
            <h2 class="mb-3" >Login</h2>
            <form action="/login" method="POST" >
                @csrf
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="masukkan username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="masukan password">
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
            </form>
        </div>
    </div>
</body>
</html>