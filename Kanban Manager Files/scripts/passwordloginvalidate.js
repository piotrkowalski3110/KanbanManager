const password = document.getElementById("password");
const logbtn = document.getElementById("loginme");
const mail = document.getElementById("accountmail");

window.addEventListener('load', (event) => {
    logbtn.style.pointerEvents = "none";
    logbtn.style.backgroundColor = "#6F6F6F";
    logbtn.style.borderColor = "#ced4da"
})

window.addEventListener('change', (event) => {
    const passwordval = password.value;
    const mailval = mail.value;

    if (passwordval === "") {
        logbtn.style.pointerEvents = "none";
        logbtn.style.backgroundColor = "#6F6F6F";
        logbtn.style.borderColor = "#ced4da"
    } else if (mailval === "") {
        logbtn.style.pointerEvents = "none";
        logbtn.style.backgroundColor = "#6F6F6F";
        logbtn.style.borderColor = "#ced4da"
    } else {
        logbtn.style.backgroundColor = "#0d6efd";
        logbtn.style.borderColor = "#0d6efd";
        logbtn.style.pointerEvents = "auto";
    }
})





