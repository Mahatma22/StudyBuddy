<button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#answerModal{{ $key }}">
    See Answer
</button>

<!-- Modal -->
<div class="modal fade" id="answerModal{{ $key }}" tabindex="-1" aria-labelledby="answerModalLabel{{ $key }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="answerModalLabel{{ $key }}">Answer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @php
                    $answers = json_decode($quiz['answer'], true);
                @endphp
                <div class="mb-3 text-start">
                    <label for="exampleFormControlInput1" class="form-label">Jawaban A</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" value="{{ $answers['A']['label'] }}" disabled>
                </div>

                <div class="mb-3 text-start">
                    <label for="exampleFormControlInput1" class="form-label">Jawaban B</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" value="{{ $answers['B']['label'] }}" disabled>
                </div>

                <div class="mb-3 text-start">
                    <label for="exampleFormControlInput1" class="form-label">Jawaban C</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" value="{{ $answers['C']['label'] }}" disabled>
                </div>

                <div class="mb-3 text-start">
                    <label for="exampleFormControlInput1" class="form-label">Jawaban D</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" value="{{ $answers['D']['label'] }}" disabled>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
