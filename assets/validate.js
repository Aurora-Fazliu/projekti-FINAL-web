function validateForm(form) {
    if(form.email.value.length < 5) {
        alert("Email i pavlefshÃ«m");
        return false;
    }
    return true;
}