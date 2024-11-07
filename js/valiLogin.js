function validateUser() {
    const userField = document.getElementById("user");
    const userError = document.getElementById("userError");

    if (userField.value.trim() === "") {
        userError.textContent = "El usuario no puede estar vacío";
        userField.classList.add("error");
        return false;
    } 

    userError.textContent = "";
    userField.classList.remove("error");

    return userField;
}

function validatePassword() {
    const passwordField = document.getElementById("contrasena");
    const passwordError = document.getElementById("passwordError");

    if (passwordField.value.trim() === "") {
        passwordError.textContent = "La contraseña no puede estar vacía";
        passwordField.classList.add("error");
        return false;
    }

    passwordError.textContent = "";
    passwordField.classList.remove("error");

    return passwordField;
}

function validateLogin(event) {
    // Llama a las funciones de validación
    const isUserValid = validateUser();
    const isPasswordValid = validatePassword();

    if (isUserValid === false && isPasswordValid === false) {
        event.preventDefault();
    }
}
