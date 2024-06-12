@extends('layoutAdmin.main')
@section('tittle', 'Input FAQ')

@section('css')
<style>
    span{
        text-decoration:none
    }
</style>
@endsection

@section('content')

<div class="container mt-5">
    <div class="faq-header">
        <h2 class="p-3 bg-light rounded">Admin FAQ</h2>
    </div>

    <!-- Form to Add New FAQ -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>Add New FAQ</h5>
        </div>
        <div class="card-body">
            <form id="faqForm">
                <div class="form-group">
                    <label for="faqQuestion">Question</label>
                    <input type="text" class="form-control" id="faqQuestion" required>
                </div>
                <div class="form-group">
                    <label for="faqAnswer">Answer</label>
                    <textarea class="form-control" id="faqAnswer" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add FAQ</button>
            </form>
        </div>
    </div>
    
    <div id="faqAccordion">
        <!-- Existing FAQ Items will go here -->
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let faqCount = 0;

        // Load FAQs from localStorage
        const faqs = JSON.parse(localStorage.getItem('faqs')) || [];

        const faqForm = document.getElementById('faqForm');
        faqForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const question = document.getElementById('faqQuestion').value;
            const answer = document.getElementById('faqAnswer').value;
            addFAQ(question, answer);
            faqForm.reset();
        });

        function addFAQ(question, answer) {
            faqCount++;
            const faq = { id: faqCount, question, answer };
            faqs.push(faq);
            localStorage.setItem('faqs', JSON.stringify(faqs));
            renderFAQs();
        }

        function renderFAQs() {
            const faqAccordion = document.getElementById('faqAccordion');
            faqAccordion.innerHTML = '';
            faqs.forEach(faq => {
                const faqItem = document.createElement('div');
                faqItem.className = 'card';
                faqItem.id = `faqItem${faq.id}`;
                faqItem.innerHTML = `
                    <div class="card-header" id="heading${faq.id}">
                        <h5 class="mb-0 d-flex justify-content-between">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse${faq.id}" aria-expanded="false" aria-controls="collapse${faq.id}">
                                <span class="h5">${faq.question}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down collapse-icon" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </button>
                            <button class="btn btn-danger btn-sm" onclick="deleteFAQ(${faq.id})">Delete</button>
                        </h5>
                    </div>
                    <div id="collapse${faq.id}" class="collapse" aria-labelledby="heading${faq.id}">
                        <div class="card-body">${faq.answer}</div>
                    </div>
                `;
                faqAccordion.appendChild(faqItem);
            });
        }

        window.deleteFAQ = function(id) {
            const confirmation = confirm('Apakah yakin untuk menghapus?');
            if (confirmation) {
                const index = faqs.findIndex(faq => faq.id === id);
                if (index !== -1) {
                    faqs.splice(index, 1);
                    localStorage.setItem('faqs', JSON.stringify(faqs));
                    renderFAQs();
                }
            }
        };

        renderFAQs();
    });
</script>


@section('javascript')

<script src="{{ URL('js/inputQuiz.js') }}"></script>

@endsection
@endsection
