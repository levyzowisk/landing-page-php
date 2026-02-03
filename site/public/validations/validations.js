const regexNaoPermitido = /[^a-zA-Z\u00C0-\u00FF\s]/g;

export const sanitazeName = (e) => {
    e.target.value = e.target.value.replace(regexNaoPermitido, '');
}

export const verificarForm = (form, btn) => {
    
    if(form.checkValidity()) {
        btn.disabled = false;
    }
}