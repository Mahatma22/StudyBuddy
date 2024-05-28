document.addEventListener('DOMContentLoaded', () => {
    const courseDropdown = document.getElementById('courseTable');
    const courseDropdownAddQuiz= document.getElementById('course');
    courseDropdown.selectedIndex = 0; // 
    courseDropdownAddQuiz.selectedIndex = 0;
    
    getDataForTable(); 
    populateSubjects();
});


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
    const courseDropdown = document.getElementById('courseTable').value;
    console.log(courseDropdown);
    const tableBody = document.querySelector('table tbody');
    if (courseDropdown){  
        fetch(`/dataSubject/${courseDropdown}`)
        .then(response => response.json())
        .then(data => {
            tableBody.innerHTML = ''; 
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

        if (courseDropdown=="Pilih Mata Pelajaran") {
            fetch(`/allDataSubject`)
            .then(response => response.json())
            .then(data => {
                tableBody.innerHTML = ''; 
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
        }      
    }

}
