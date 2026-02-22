function openModal() { document.getElementById("modal").style.display = "block"; }
function closeModal() { document.getElementById("modal").style.display = "none"; }

function switchForm() {
    let loginForm = document.getElementById("login-form");
    let registerForm = document.getElementById("register-form");
    let formTitle = document.getElementById("form-title");

    if (loginForm.style.display === "none") {
        loginForm.style.display = "block";
        registerForm.style.display = "none";
        formTitle.innerText = "Login";
    } else {
        loginForm.style.display = "none";
        registerForm.style.display = "block";
        formTitle.innerText = "Register";
    }
}
