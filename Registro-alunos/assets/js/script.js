function calcularMedia() {
        const nota1 = parseFloat(document.querySelector('input[name="nota1"]').value) || 0;
        const nota2 = parseFloat(document.querySelector('input[name="nota2"]').value) || 0;
        const nota3 = parseFloat(document.querySelector('input[name="nota3"]').value) || 0;
        const nota4 = parseFloat(document.querySelector('input[name="nota4"]').value) || 0;
        const media = (nota1 + nota2 + nota3 + nota4) / 4;
        document.getElementById('media').textContent = media.toFixed(2);
}