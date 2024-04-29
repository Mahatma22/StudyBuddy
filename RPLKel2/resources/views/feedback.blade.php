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

                        {{-- <fieldset class="row mb-4">
                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                            <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                First radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                Second radio
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                <label class="form-check-label" for="gridRadios3">
                                Third disabled radio
                                </label>
                            </div>
                            </div>
                        </fieldset>

                        <div class="row mb-4">
                            <div class="col-sm-8 offset-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                                </label>
                            </div>
                            </div>
                        </div> --}}

                        <button type="submit" class="btn btn-primary" style="font-size: 14px">Submit</button>
                    </form>
                    {{-- <div class="row">
                        <div class="col-sm-4 text-center font-weight-light">
                            Course
                        </div>
                        <div class="col-sm-4 text-center font-weight-bold">
                            Subject
                        </div>
                        <div class="col-sm-4 text-center font-weight-bold">
                            Action
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-4 text-center font-weight-bold">
                            <div class="row text-center font-weight-normal">
                                <div class="col">
                                    Mathematics
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center font-weight-bold">
                            <div class="row text-center font-weight-normal">
                                <div class="col">
                                    Integral
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center font-weight-bold">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-primary btn-sm" style="font-size: 12px;">Attempt Quiz</a>
                            </div>
                        </div>
                    </div>
                    <hr> --}}

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
