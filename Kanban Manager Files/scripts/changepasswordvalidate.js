const password = document.getElementById("password");
const confirmpassword = document.getElementById("confirm_password");
const changebtn = document.getElementById("changepasswordbtn");

window.addEventListener('load', (event) => {
    changebtn.style.pointerEvents = "none";
    changebtn.style.backgroundColor = "#6F6F6F";
    changebtn.style.borderColor = "#ced4da"
})

window.addEventListener('change', (event) => {
    const passwordval = password.value;
    const confirmpasswordval = confirmpassword.value;

    if (confirmpasswordval != passwordval) {
        confirmpassword.style.borderColor = "crimson";
        changebtn.style.pointerEvents = "none";
        changebtn.style.backgroundColor = "#6F6F6F";
        changebtn.style.borderColor = "#ced4da"
    } else if (passwordval === "") {
        changebtn.style.pointerEvents = "none";
        changebtn.style.backgroundColor = "#6F6F6F";
        changebtn.style.borderColor = "#ced4da"
    } else if (confirmpasswordval === "") {
        changebtn.style.pointerEvents = "none";
        changebtn.style.backgroundColor = "#6F6F6F";
        changebtn.style.borderColor = "#ced4da"
    } else if (confirmpasswordval != passwordval) {
        confirmpassword.style.borderColor = "crimson";
        changebtn.style.pointerEvents = "none";
        changebtn.style.backgroundColor = "#6F6F6F";
        changebtn.style.borderColor = "#ced4da";
    }
    else {
        changebtn.style.backgroundColor = "#0d6efd";
        changebtn.style.borderColor = "#0d6efd";
        confirmpassword.style.borderColor = "#ced4da"
        changebtn.style.pointerEvents = "auto";
    }
})