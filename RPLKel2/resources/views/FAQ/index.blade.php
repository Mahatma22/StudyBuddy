@extends('layout.main')

@section('title', 'FAQ')

@section('css')
<link rel="stylesheet" href="style.css">
@endsection

@section('content')
<div class="container mt-5">
    {{-- <div class="faq-header">
        <h2 class="p-3 bg-light rounded">Frequently Asked Questions</h2>
    </div> --}}

    <div id="faqAccordion">
        <!-- FAQ Items will be fetched and displayed here -->
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const faqs = JSON.parse(localStorage.getItem('faqs')) || [];

        const faqAccordion = document.getElementById('faqAccordion');
        
        faqs.forEach((faq, index) => {
            const faqItem = document.createElement('div');
            faqItem.className = 'card';
            faqItem.innerHTML = `
                <div class="card-header" id="heading${index + 1}">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse${index + 1}" aria-expanded="false" aria-controls="collapse${index + 1}">
                            <span class="h5">${faq.question}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down collapse-icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </button>
                    </h5>
                </div>
                <div id="collapse${index + 1}" class="collapse" aria-labelledby="heading${index + 1}">
                    <div class="card-body">${faq.answer}</div>
                </div>
            `;
            faqAccordion.appendChild(faqItem);
        });
    });
</script>
@section('javascript')

<script src="{{ URL('js/inputQuiz.js') }}"></script>

@endsection

@endsection
