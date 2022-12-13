// REVEAL PASSWORD

document.querySelector("#eye").addEventListener("click", () => {
    document.querySelector(".password-input").classList.toggle("change");

    var x = document.getElementById("mypassword");
    var eye = document.getElementById("eye");
    if (x.type === "password") {
        x.type = "text";
        eye.className = "fa-regular fa-eye";
    } else {
        x.type = "password";
        eye.className = "fa-regular fa-eye-slash";
    }
});
// REVEAL PASSWORD
