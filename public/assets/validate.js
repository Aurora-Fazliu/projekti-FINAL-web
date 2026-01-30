function validateForm(form) {
    if(form.email.value.length < 5) {
        alert("Email i pavlefshÃƒÂ«m");
        return false;
    }
    return true;
}