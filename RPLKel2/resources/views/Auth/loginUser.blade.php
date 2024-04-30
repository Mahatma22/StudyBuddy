<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL('css/login.css') }}">

</head>
<body>
    <section class="login d-flex ">
        <div class="login-right ">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100 " src="{{ URL('img/login.png') }}" alt="First slide" style="height: 120vh">
                    </div>
                </div>
            </div>
        </div>
        <div class="login-left ">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="header">
                        <h1>Selamat Datang</h1>
                        <p>Selamat Datang dan Isi Email Dan Password</p>      
                    </div>                
                    <div class="login-form">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukan Email" value="{{old('email')}}">
                                <div id="emailHelp" class="form-text">kami tidak akan menyebarkan email ini kesiapapun</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" value="{{old('password')}}">
                            </div>
                            <button type="submit" class="btn btn-primary" name="login">User Login</button>
                        </form>
                            <span>Belum Punya akun? <a href="registrasi" class="text-decoration-none">Daftar Disini</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>

</html>