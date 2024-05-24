<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#Modal{{ $key }}">
    Update
</button>

<!-- Modal -->
<div class="modal fade" id="Modal{{ $key }}" tabindex="-1" aria-labelledby="answerModalLabel{{ $key }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="answerModalLabel{{ $key }}">Answer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="POST" action ="/updateQuiz/{{ $quiz['id'] }}" enctype="multipart/form-data">
                @csrf
                    
                    <input type="hidden" name="course" value="{{ $quiz['course_id'] }}">
                    <input type="hidden" name="subject" value="{{ $quiz['subject_id'] }}">
                    <div class="mb-2 text-start">
                        <label for="recipient-name" class="col-form-label">Soal</label>
                        <input type="text" class="form-control" id="recipient-name" name="question" value="{{ $quiz['question']}}">
                        <span class="text-danger">@error("question") {{$message}} @enderror</span>
                    </div>
                    <div class="mb-2 text-start">
                        <label for="formFile" class="form-label">Inputkan Soal Berupa Gambar</label>
                        <input class="form-control" type="file" id="formFile" name="imageQuestion">
                        <span class="text-danger">@error("imageQuestion") {{$message}} @enderror</span>
                    </div>

                    @php
                    $answers = json_decode($quiz['answer'], true);
                    @endphp
                    <div class="mb-2 text-start">
                        <label for="recipient-name" class="col-form-label">Jawaban A</label>
                        <div class="d-flex justify-content-center">
                            <input type="text" class="form-control" id="recipient-name" name="AnswerA" value="{{ $answers['A']['label'] }}">
                            <input class="form-check-input ms-1 mt-2" type="radio" id="radioNoLabel" name="Benar" value="A" aria-label="...">
                        </div>
                        <span class="text-danger">@error("AnswerA") {{$message}} @enderror</span>
                    </div>
                    <div class="mb-2 text-start">
                        <label for="recipient-name" class="col-form-label">Jawaban B</label>
                        <div class="d-flex justify-content-center">
                            <input type="text" class="form-control" value="{{ $answers['B']['label'] }}" id="recipient-name" name="AnswerB">
                            <input class="form-check-input ms-1 mt-2" type="radio" id="radioNoLabel" name="Benar" value="B" aria-label="...">
                        </div>
                        <span class="text-danger">@error("AnswerB") {{$message}} @enderror</span>
                    </div>
                    <div class="mb-2 text-start">
                        <label for="recipient-name" class="col-form-label">Jawaban C</label>
                        <div class="d-flex justify-content-center">
                            <input type="text" class="form-control" value="{{ $answers['C']['label'] }}" id="recipient-name" name="AnswerC">
                            <input class="form-check-input ms-1 mt-2" type="radio" id="radioNoLabel" name="Benar" value="C" aria-label="...">
                        </div>
                        <span class="text-danger">@error("AnswerC") {{$message}} @enderror</span>
                    </div>
                    <div class="mb-2 text-start">
                        <label for="recipient-name" class="col-form-label">Jawaban D</label>
                        <div class="d-flex justify-content-center">
                            <input type="text" class="form-control" value="{{ $answers['D']['label'] }}" id="recipient-name" name="AnswerD">
                            <input class="form-check-input ms-1 mt-2" type="radio" id="radioNoLabel" name="Benar" value="D" aria-label="...">
                        </div>
                        <span class="text-danger">@error("AnswerD") {{$message}} @enderror</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
