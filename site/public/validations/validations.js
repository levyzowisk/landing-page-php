const regexNaoPermitido = /[^a-zA-Z\u00C0-\u00FF\s]/g;

window.sanitazeName = (e) => {
    e.target.value = e.target.value.replace(regexNaoPermitido, '');
}

window.verificarForm = (form, btn) => {
    
    if(form.checkValidity()) {
        btn.disabled = false;
    }
}

window.confirmDelete = (path,) => {
    window.location.href = path
}