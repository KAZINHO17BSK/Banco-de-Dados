function togglePasswordVisibility() {
    var passwordInput = document.getElementById("senha");
    var showPasswordCheckbox = document.getElementById("showPassword");

    if (showPasswordCheckbox.checked) {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}
function mostrarPopup() {
    alert("Usuário cadastrado com sucesso!");
    return true;
}