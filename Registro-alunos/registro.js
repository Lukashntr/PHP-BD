const form = document.querySelector('#student-form');
const gradeInputs = document.querySelectorAll('.grade');
const average = document.querySelector('#average');
const status = document.querySelector('#status');

function updateSummary() {
    const grades = [...gradeInputs]
        .map((input) => Number(input.value))
        .filter((grade) => Number.isFinite(grade));
    const result = grades.length ? grades.reduce((total, grade) => total + grade, 0) / grades.length : 0;

    average.textContent = result.toFixed(1).replace('.', ',');
    status.className = '';
    status.textContent = grades.length < 4 ? 'Aguardando notas' : result >= 6 ? 'Aprovado' : 'Em recuperação';
    if (grades.length === 4) {
        status.classList.add(result >= 6 ? 'approved' : 'failed');
    }
}

gradeInputs.forEach((input) => input.addEventListener('input', updateSummary));
form.addEventListener('reset', () => setTimeout(updateSummary));
form.addEventListener('submit', (event) => {
    if (!form.reportValidity()) event.preventDefault();
});
