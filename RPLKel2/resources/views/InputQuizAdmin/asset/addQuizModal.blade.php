<button type="button" class="btn btn-primary mt-4 ms-4" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Tambah Pertanyaan</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pertanyaan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action ="/quiz">
                    @csrf
                    <div class="mb-2">
                        <div class="d-flex justify-content-center">
                            <select class="form-select me-2" id="course" onchange="populateSubjects(this.value)" name="course" >
                                <option selected>Pilih Mata Pelajaran</option>
                                @foreach($courseData as $courseDatas)
                                <option value="{{$courseDatas->course_id}}">{{$courseDatas->course_name}}</option>
                                @endforeach
                            </select>
                            <select class="form-select" id="subject" disabled name="subject">
                                <option selected>Pilih Materi</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="recipient-name" class="col-form-label">Soal</label>
                        <input type="text" class="form-control" id="recipient-name" name="question">
                    </div>
                    <div class="mb-2">
                        <label for="formFile" class="form-label">Inputkan Soal Berupa Gambar</label>
                        <input class="form-control" type="file" id="formFile" nama="imageQuestion">
                    </div>
                    <div class="mb-2">
                        <label for="recipient-name" class="col-form-label">Jawaban A</label>
                        <div class="d-flex justify-content-center">
                            <input type="text" class="form-control" id="recipient-name" name="AnswerA">
                            <input class="form-check-input ms-1 mt-2" type="radio" id="radioNoLabel" name="Benar" value="A" aria-label="...">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="recipient-name" class="col-form-label">Jawaban B</label>
                        <div class="d-flex justify-content-center">
                            <input type="text" class="form-control" id="recipient-name" name="AnswerB">
                            <input class="form-check-input ms-1 mt-2" type="radio" id="radioNoLabel" name="Benar" value="B" aria-label="...">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="recipient-name" class="col-form-label">Jawaban C</label>
                        <div class="d-flex justify-content-center">
                            <input type="text" class="form-control" id="recipient-name" name="AnswerC">
                            <input class="form-check-input ms-1 mt-2" type="radio" id="radioNoLabel" name="Benar" value="C" aria-label="...">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="recipient-name" class="col-form-label">Jawaban D</label>
                        <div class="d-flex justify-content-center">
                            <input type="text" class="form-control" id="recipient-name" name="AnswerD">
                            <input class="form-check-input ms-1 mt-2" type="radio" id="radioNoLabel" name="Benar" value="D" aria-label="...">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
