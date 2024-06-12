<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyBuddy</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/laddingpage.css">

    <style>
        body, html {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .satu {
            background-image: url('img/Wave Texture.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Make sure the section covers the full viewport height */
        }

        .dua, .empat {
            padding: 50px 0;
            background-color: #f8f9fa;
        }

        .tiga{
            padding: 50px 0;
            background-color: white;
        }


        .section-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            color: #008DDA;
            font-weight: 600;
        }

        .about-img {
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .col-md-6 h3 {
            font-size: 1.75rem;
            color: #333;
            margin-bottom: 20px;
        }

        .col-md-6 p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }


        p.Visi{
            font-size: 1.5rem;
            color: #333;
        }
        ol li{
            font-size: 1.3rem;
            color: #333;
            margin-bottom: 3px;
        }

        h4.fitur{
            text-align: center;
            margin-bottom: 150px;
            font-size: 2.5rem;
            color: #008DDA;
            font-weight: 600;
        }

        .title-fitur{
            font-size: 1.5rem;
            color: #008DDA;
            font-weight: 600;
            margin-bottom: 20px;
            margin-top: 50px;
        }

        nav.navbar{
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 9999;
        }

        .navbar-fixed {
            position: fixed;
            z-index: 9999;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-bg-opacity: 0.6;
            -webkit-backdrop-filter: blur(5px);
                    backdrop-filter: blur(5px);
            box-shadow: inset 0px -1px 0 0 rgba(0, 0, 0, 0.2);
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#" style="padding-bottom: 10px;">
            <img src="{{ URL('img/LogoBuddy.png')}}" style="height: 32px; margin-right: 10px;">StudyBuddy
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <button class="oval-button dropdown-toggle" type="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('loginAdmin') }}">Admin</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('loginUser') }}">Siswa</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <section class="satu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 content-left">
                    <div class="title">StudyBuddy</div>
                    <div class="landing-page">
                        <p class="learning-management-system">Learning Management System</p>
                    </div>
                    <span class="Isi">
                        StudyBuddy, aplikasi belajar online untuk siswa SMA, hadir dengan solusi lengkap untuk membantumu meraih nilai terbaik! Dapatkan materi pelajaran yang lengkap, video pembelajaran yang menarik, quiz interaktif, forum diskusi, dan berbagai fitur lainnya untuk membantumu belajar lebih efektif dan menyenangkan. Download StudyBuddy sekarang dan rasakan manfaatnya!
                    </span>

                    <div class="container">
                        <img src="https://images.unsplash.com/photo-1576506542790-51244b486a6b?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="test">
                        <img src="https://images.unsplash.com/photo-1424115087662-5845efc6b366?q=80&w=1888&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="test2">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dua">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">Visi</h2>
                    <div class="d-flex justify-content-center">
                        <div class="card" style="width: 75%;">
                            <div class="card-body">
                                <p class="Visi">
                                    Menjadi platform belajar online terkemuka yang memberdayakan siswa SMA untuk mencapai keunggulan akademik dan menjadi pembelajar seumur hidup.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <h2 class="section-title">Misi</h2>
                    <div class="d-flex justify-content-center">
                        <div class="card" style="width: 75%;">
                            <div class="card-body">
                                <ol start="1">
                                    <li>Menyediakan materi pembelajaran berkualitas tinggi dan beragam dalam mata pelajaran utama yang memenuhi kebutuhan siswa SMA.</li>
                                    <li>Membentuk komunitas di mana siswa dapat terhubung, berbagi pengetahuan, dan saling mendukung dalam perjalanan pendidikan mereka.</li>
                                    <li>Menggunakan teknologi terbaru untuk membuat pembelajaran menjadi interaktif, menarik, dan mudah diakses kapan saja dan di mana saja.</li>
                                    <li> memperbarui dan memperluas sumber daya dan fitur kami berdasarkan umpan balik pengguna dan tren pendidikan untuk memastikan pengalaman belajar terbaik.</li>
                                    <li>Membantu siswa membangun kepercayaan diri, mencapai tujuan akademis mereka, dan mengembangkan keterampilan yang diperlukan untuk sukses di masa depan.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tiga my-5">
        <div class="container-fluid text-center">
            <h4 class="fitur">
                Fitur StudyBuddy
            </h4>
            <div class="row my-lg-5">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <div class="fiturUtama">
                            <svg fill="#008DDA" width="168px" height="168px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M1751 0v1920H169V0h1582Zm-115 112H290v9h-1v1678h1v20h1346V112Zm-234 235v321H514V347h888Z" fill-rule="evenodd"></path> </g></svg>
                            <h5 class="mt-3 title-fitur">Quiz</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <div class="fiturUtama">
                            <svg width="168px" height="168px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#008DDA"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#008DDA" d="M165.262 25.154c-38.376 0-73.092 6.462-97.408 16.405-12.159 4.97-21.669 10.834-27.706 16.67-6.036 5.835-8.459 11.144-8.459 16.218 0 5.075 2.423 10.384 8.46 16.219 6.036 5.835 15.546 11.699 27.705 16.67 24.316 9.942 59.032 16.404 97.408 16.404.162 0 .32-.006.482-.006l-38.95 108.504 88.065-112.265c18.283-2.87 34.592-7.232 47.81-12.637 12.16-4.971 21.671-10.835 27.708-16.67 6.037-5.836 8.459-11.144 8.459-16.219 0-5.074-2.422-10.383-8.46-16.219-6.036-5.835-15.548-11.698-27.706-16.67-24.316-9.942-59.032-16.404-97.408-16.404zm183.797 94.815c-38.377 0-73.092 6.462-97.409 16.404-12.158 4.971-21.668 10.835-27.705 16.67-6.036 5.835-8.459 11.144-8.459 16.219 0 5.074 2.423 10.385 8.46 16.22 6.036 5.836 15.546 11.697 27.704 16.668 3.106 1.27 6.387 2.481 9.819 3.631l82.965 105.764-34.2-95.274c12.3 1.47 25.327 2.284 38.825 2.284 38.376 0 73.091-6.462 97.408-16.405 12.158-4.97 21.67-10.832 27.707-16.668 6.036-5.835 8.459-11.146 8.459-16.22 0-5.075-2.423-10.384-8.46-16.219-6.036-5.835-15.548-11.699-27.706-16.67-24.317-9.942-59.032-16.404-97.408-16.404zM96 249c-25.37 0-47 23.91-47 55s21.63 55 47 55 47-23.91 47-55-21.63-55-47-55zm320 0c-25.37 0-47 23.91-47 55s21.63 55 47 55 47-23.91 47-55-21.63-55-47-55zM58.166 363.348c-7.084 8.321-13.03 19.258-17.738 31.812-10.33 27.544-14.433 62.236-15.131 91.84h141.406c-.698-29.604-4.802-64.296-15.13-91.84-4.709-12.554-10.655-23.49-17.739-31.812C123.246 371.9 110.235 377 96 377c-14.235 0-27.246-5.1-37.834-13.652zm320 0c-7.084 8.321-13.03 19.258-17.738 31.812-10.33 27.544-14.433 62.236-15.131 91.84h141.406c-.698-29.604-4.802-64.296-15.13-91.84-4.709-12.554-10.655-23.49-17.739-31.812C443.246 371.9 430.235 377 416 377c-14.235 0-27.246-5.1-37.834-13.652z"></path></g></svg>
                            <h5 class="mt-3 title-fitur">Diskusi</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <div class="fiturUtama">
                            <svg fill="#008DDA" width="168px" height="168px" viewBox="0 0 36 36" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>install-line</title> <path class="clr-i-outline clr-i-outline-path-1" d="M30.92,8H26.55a1,1,0,0,0,0,2H31V30H5V10H9.38a1,1,0,0,0,0-2H5.08A2,2,0,0,0,3,10V30a2,2,0,0,0,2.08,2H30.92A2,2,0,0,0,33,30V10A2,2,0,0,0,30.92,8Z"></path><path class="clr-i-outline clr-i-outline-path-2" d="M10.3,18.87l7,6.89a1,1,0,0,0,1.4,0l7-6.89a1,1,0,0,0-1.4-1.43L19,22.65V4a1,1,0,0,0-2,0V22.65l-5.3-5.21a1,1,0,0,0-1.4,1.43Z"></path> <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect> </g></svg>
                            <h5 class="mt-3 title-fitur">Materi yang Dapat Di Download</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <div class="fiturUtama">
                            <svg width="168px" height="168px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18 3H6C3.79086 3 2 4.79086 2 7V17C2 19.2091 3.79086 21 6 21H18C20.2091 21 22 19.2091 22 17V7C22 4.79086 20.2091 3 18 3Z" stroke="#008DDA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10.28 8.03994C9.19003 8.42994 9 10.5199 9 12.0399C9 13.5599 9.19003 15.5999 10.28 16.0399C11.37 16.4799 16 13.7499 16 12.0399C16 10.3299 11.44 7.61994 10.28 8.03994Z" stroke="#008DDA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <h5 class="mt-3 title-fitur">Video Pembelajaran</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        window.onscroll = function() {
        const header = document.querySelector('nav.navbar');
        const fixed_navbar = header.offsetTop;

        if (window.pageYOffset > fixed_navbar) {
            header.classList.add('navbar-fixed');
        } else {
            header.classList.remove('navbar-fixed');
        }
};

    </script>
    @if(Session::has("Fail"))
    <script>
        swal("Gagal", "{!! Session::get('Fail') !!}", "error", {
            button: "OK",
        });
    </script>
    @endif
</body>
</html>
