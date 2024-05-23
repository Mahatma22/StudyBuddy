function populateSubjects(){
    const courseDropdown = document.getElementById('course').value ;
    const  subjectDropdown = document.getElementById('subject');
    console.log(courseDropdown);

    subjectDropdown.innerHTML = '<option selected>Pilih Materi</option>';
    subjectDropdown.disabled = true;
    if (courseDropdown){
        fetch(`/dataSubject/${courseDropdown}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(subject => {
                    const option= document.createElement('option');
                    option.value = subject.subject_id;
                    option.text = subject.subject_name;
                    subjectDropdown.appendChild(option);
                    subjectDropdown.disabled = false;
                })
            })
            .catch(error => console.error('Error fetching subjects:', error));
    }
}


function getDataForTable(){
    const courseDropdown = document.getElementById('courseTable').value ;
    fetch(`/dataSubject/${courseDropdown}`)
    .then(response => response.json())
    .then(data => {
        const tableBody = document.querySelector('table tbody');
        tableBody.innerHTML = ''; // Clear previous table rows
        data.forEach(subject => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <th scope="row">${subject.subject_id}</th >
                <td>${subject.subject_name}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="detailQuiz/${subject.subject_id}">Show</a>
                </td>
            `;
            tableBody.appendChild(row);
        });
    })
    .catch(error => console.error('Error fetching table data:', error));

}
