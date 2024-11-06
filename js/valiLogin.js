
function validateUser() {
    const userField = document.getElementById("user");
    const userError = document.getElementById("userError");

    if (userField.value.trim() === "") {
        userError.textContent = "El usuario no puede estar vacío";
        userField.classList.add("error");
    } else {
        userError.textContent = "";
        userField.classList.remove("error");
    }
}

function validatePassword() {
    const passwordField = document.getElementById("contrasena");
    const passwordError = document.getElementById("passwordError");

    if (passwordField.value.trim() === "") {
        passwordError.textContent = "La contraseña no puede estar vacía";
        passwordField.classList.add("error");
    } else {
        passwordError.textContent = "";
        passwordField.classList.remove("error");
    }
}
