@extends('layout.main')
@section('tittle', 'Frequently Asked Question')

@section('css')
<link rel="stylesheet" href="css/faq.css">
@endsection

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    {{-- <div class="faq-header">
        <h2 class="p-3 bg-light rounded">Frequently Asked Questions</h2>
    </div> --}}

    <div id="faqAccordion">
        <!-- FAQ Item 1 -->
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <span class="h5">What is StuddyBuddy?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down collapse-icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                <div class="card-body">
                StudyBuddy adalah aplikasi belajar online untuk siswa SMA yang menyediakan materi pelajaran lengkap, video pembelajaran, quiz interaktif, forum diskusi, dan banyak fitur lainnya untuk membantu belajar lebih efektif dan menyenangkan.
                    </div>
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="h5">Fitur apa saja yang ditawarkan oleh StudyBuddy?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down collapse-icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                <div class="card-body">
                StudyBuddy menawarkan berbagai fitur seperti materi pelajaran lengkap, video pembelajaran, quiz interaktif, forum diskusi, dan lain-lain.
                    </div>
            </div>
        </div>
        <!-- FAQ Item 3 -->
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="h5">Bagaimana cara menggunakan fitur quiz interaktif di StudyBuddy?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down collapse-icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                <div class="card-body">
                Untuk menggunakan fitur quiz interaktif, pilih mata pelajaran yang ingin Anda pelajari, kemudian pilih menu quiz. Ikuti petunjuk yang diberikan untuk memulai quiz.
                    </div>
            </div>
        </div>
        <!-- FAQ Item 4 -->
        <div class="card">
            <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <span class="h5">Apakah saya bisa berdiskusi dengan teman-teman di aplikasi StudyBuddy?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down collapse-icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                <div class="card-body">
                Ya, Anda bisa menggunakan fitur forum diskusi untuk berdiskusi dengan teman-teman dan bertanya tentang materi pelajaran yang Anda belum mengerti.</div>
            </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="card">
            <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <span class="h5">Bagaimana cara menonton video pembelajaran di StudyBuddy?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down collapse-icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                <div class="card-body">
                Pilih mata pelajaran yang ingin Anda pelajari, kemudian pilih menu video. Anda dapat menonton video pembelajaran yang tersedia di sana.</div>
            </div>
        </div>
        <!-- FAQ Item 6 -->
        <div class="card">
            <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <span class="h5">Apakah saya perlu membuat akun untuk menggunakan StudyBuddy?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down collapse-icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                </h5>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix">
                <div class="card-body">
                Ya, Anda perlu membuat akun untuk mengakses semua fitur di StudyBuddy. Pendaftaran akun dapat dilakukan langsung melalui aplikasi.</div>
            </div>
        </div>
        <!-- FAQ Item 7 -->
        <div class="card">
            <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <span class="h5">Apa yang harus saya lakukan jika lupa kata sandi?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down collapse-icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                </h5>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven">
                <div class="card-body">
                Jika lupa kata sandi, klik 'Lupa Kata Sandi' di layar login dan ikuti petunjuk untuk mereset kata sandi Anda melalui email yang terdaftar.</div>
            </div>
        </div>
        <!-- FAQ Item 8 -->
        <div class="card">
            <div class="card-header" id="headingEight">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        <span class="h5">Bagaimana cara bergabung dengan forum diskusi?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down collapse-icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                </h5>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight">
                <div class="card-body">
                Untuk bergabung dengan forum diskusi, buka menu 'Forum' di aplikasi, pilih topik yang Anda minati, dan mulai berpartisipasi dalam diskusi.</div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

@endsection
