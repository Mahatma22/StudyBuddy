<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .oval-button {
        width: 110px;
        height: 40px;
        border-radius: 20px; 
        background-color: #007bff; 
        color: #fff; 
        border: 3px solid #FFFFFF;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 13px 2.2px 13px 0;
        font-size: 20px;
        font-family: 'Inter', sans-serif;
        font-weight: normal;
    }

    .oval-button:hover {
        background-color: #0056b3; 
    }

    body, html {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
        background-image: url('img/Wave Texture.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .content-left {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .navbar-brand {
        margin-top: 5px;
        font-weight: bold;
    }

    .title {
        position: absolute;
        left: 80px;
        top: 100px;
        font-size: 48px;
        color: #008DDA;
        font-weight: bold;
    }

    .landing-page .learning-management-system {
        position: absolute;
        left: 80px;
        top: 150px;
        font-size: 48px;
        color: #008DDA;
    }

    .Isi {
        position: absolute;
        left: 80px;
        top: 250px;
        font-size: 18px;
        color: black;
        text-align: justify;
    }

    .container {
        display: flex;
        justify-content: center; 
        align-items: center; 
        height: 300px; 
    }

    .test {
        width: 350px; 
        height: 450px;
        position: relative; 
        left: 950px; 
        top: 150px;
        border-radius: 28px;
        outline: none;
    }

    .test2 {
        width: 350px; 
        height: 420px; 
        position: relative; 
        left: 500px;
        top: 220px; 
        border-radius: 28px;
        outline: none;
    }

    .dropdown-menu {
        min-width: auto; /* Set minimum width to auto */
        max-width: 200px; /* Set maximum width to 200px atau sesuai kebutuhan */
        width: auto; /* Set width to auto */

    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#" style="padding-bottom: 10px;">
            <img src="{{ URL('img/LogoStuddyBuddy.png')}}" style="height: 20px; margin-right: 10px;">StudyBuddy
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="oval-button dropdown-toggle" type="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('loginAdmin') }}">As Admin</a></li>
                        <li><hr class="dropdown-divider"></li> 
                        <li><a class="dropdown-item" href="{{ route('loginUser') }}">As User</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 content-left">
                <div class="title">StuddyBuddy</div>
                <div class="landing-page">
                    <p class="learning-management-system">Learning Management System</p>
                </div>
                <span class="Isi">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nesciunt, voluptates placeat cupiditate hic architecto ullam veritatis enim a dolor error illo amet tempore laboriosam id aspernatur omnis. Sit necessitatibus, impedit ea soluta inventore atque enim, modi eveniet quis quas itaque odit distinctio possimus perspiciatis neque corrupti. Pariatur, adipisci quas.
                </span>
                <div class="landing-page">
                    <span class="learning-management-system">Learning Management System</span>
                </div>
                <div class="container">
                    <img src="https://images.unsplash.com/photo-1576506542790-51244b486a6b?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="test">
                    <img src="https://images.unsplash.com/photo-1424115087662-5845efc6b366?q=80&w=1888&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="test2">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(Session::has("Fail"))
<script>
    swal("Gagal", "{!! Session::get('Fail') !!}", "error", {
        button: "OK",
    });
</script>
@endif
</body>
</html>
