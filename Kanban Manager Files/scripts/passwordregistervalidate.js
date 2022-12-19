const password = document.getElementById("password");
const confirmpassword = document.getElementById("confirm_password");
const regbtn = document.getElementById("registerme");
const name = document.getElementById("nameandsurname");
const mail = document.getElementById("accountmail");
const checkbox = document.getElementById("agreecheck");

window.addEventListener('load', (event) => {
    regbtn.style.pointerEvents = "none";
    regbtn.style.backgroundColor = "#6F6F6F";
    regbtn.style.borderColor = "#ced4da"
})

window.addEventListener('change', (event) => {
    const passwordval = password.value;
    const confirmpasswordval = confirmpassword.value;
    const nameval = name.value;
    const mailval = mail.value;

    if (confirmpasswordval != passwordval) {
        confirmpassword.style.borderColor = "crimson";
        regbtn.style.pointerEvents = "none";
        regbtn.style.backgroundColor = "#6F6F6F";
        regbtn.style.borderColor = "#ced4da"
    } else if (checkbox.checked == false) {
        regbtn.style.pointerEvents = "none";
        regbtn.style.backgroundColor = "#6F6F6F";
        regbtn.style.borderColor = "#ced4da"
    } else if (passwordval === "") {
        regbtn.style.pointerEvents = "none";
        regbtn.style.backgroundColor = "#6F6F6F";
        regbtn.style.borderColor = "#ced4da"
    } else if (confirmpasswordval === "") {
        regbtn.style.pointerEvents = "none";
        regbtn.style.backgroundColor = "#6F6F6F";
        regbtn.style.borderColor = "#ced4da"
    } else if (confirmpasswordval != passwordval) {
        confirmpassword.style.borderColor = "crimson";
        regbtn.style.pointerEvents = "none";
        regbtn.style.backgroundColor = "#6F6F6F";
        regbtn.style.borderColor = "#ced4da"
    } else if (nameval === "") {
        regbtn.style.pointerEvents = "none";
        regbtn.style.backgroundColor = "#6F6F6F";
        regbtn.style.borderColor = "#ced4da"
    } else if (mailval === "") {
        regbtn.style.pointerEvents = "none";
        regbtn.style.backgroundColor = "#6F6F6F";
        regbtn.style.borderColor = "#ced4da"
    } else {
        regbtn.style.backgroundColor = "#0d6efd";
        regbtn.style.borderColor = "#0d6efd";
        confirmpassword.style.borderColor = "#ced4da"
        regbtn.style.pointerEvents = "auto";
    }
})





