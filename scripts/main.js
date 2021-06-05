function toggleErrorClass(errClass) {
    document.getElementById(errClass).classList.toggle('hidden');
}

function checkInfo() {
    if(/^[a-zA-Z1-9]+$/.test("e-mail") === false) {
        toggleErrorClass("e-mail-error");
        document.getElementById("e-mail").classList.add('infoErr');
    }

    if (document.getElementById("password-id") !== document.getElementById("s-password-id")) {
        toggleErrorClass("password-error");
        document.getElementById("s-password-id").classList.add('infoErr');
        alert("Пароли не совпадают");
    }
}