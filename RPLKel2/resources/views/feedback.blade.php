@extends('layout.main')
@section('tittle', 'Feedback')

@section('css')
<link rel="stylesheet" href="css/feedback.css">
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card m-5" style="font-family: 'Inter', sans-serif;">

                <div class="card-header bg-white font-weight-bold m-4" style="color: #000000; font-size: 32px">
                    Feedback
                    <p style="color: #000000; font-size: 16px; font-weight: 300">
                        Masukan dari Anda akan sangat berguna bagi kami untuk terus memperbaiki platform ini
                    </p>
                </div>

                <div class="card-body mx-4" style="font-size: 16px">
                    <div class="row justify-content-center">
                    <form>
                        <div class="row mb-4">
                            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_lengkap">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-8">
                            <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="telepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="telepon">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="masukan" class="col-sm-2 col-form-label">Masukan Anda</label>
                            <div class="col-sm-8">
                            <textarea class="form-control" id="masukan" name="masukan" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="rating" class="col-sm-2 col-form-label">Rating Aplikasi</label>
                            <div class="col-sm-8">
                                <div class="rating" id="rating">
                                    <input type="radio" id="star1" name="rating" value="1"><label for="star1"></label>
                                    <input type="radio" id="star2" name="rating" value="2"><label for="star2"></label>
                                    <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
                                    <input type="radio" id="star4" name="rating" value="4"><label for="star4"></label>
                                    <input type="radio" id="star5" name="rating" value="5"><label for="star5"></label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" style="font-size: 14px">Submit</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection
