/*
================== page logIn and Sign Up ======================
*/
let formLogIn = document.querySelector('.form-logIn');
let formSignUp = document.querySelector('.form-Signup');
let btnLogIn = document.querySelector(".btn-login");
let btnSignUp = document.querySelector(".btn-signup");
let aLogIn = document.querySelector(".a-login");
let aSignUp = document.querySelector(".a-signup")

btnLogIn.addEventListener('click', function () {
    formSignUp.classList.add("show");
    formLogIn.classList.remove("show");

    btnLogIn.classList.add("btn-primary");
    btnSignUp.classList.remove("btn-primary");

    btnSignUp.classList.add("btn-secondary");
    btnLogIn.classList.remove("btn-secondary");
});

btnSignUp.addEventListener('click', function () {
    formLogIn.classList.add("show");
    formSignUp.classList.remove("show");

    btnSignUp.classList.add("btn-primary");
    btnLogIn.classList.remove("btn-primary");

    btnLogIn.classList.add("btn-secondary");
    btnSignUp.classList.remove("btn-secondary");

});

aLogIn.addEventListener('click', function () {
    formSignUp.classList.add("show");
    formLogIn.classList.remove("show");

    btnLogIn.classList.add("btn-primary");
    btnSignUp.classList.remove("btn-primary");

    btnSignUp.classList.add("btn-secondary");
    btnLogIn.classList.remove("btn-secondary");
});

aSignUp.addEventListener('click', function () {
    formLogIn.classList.add("show");
    formSignUp.classList.remove("show");

    btnSignUp.classList.add("btn-primary");
    btnLogIn.classList.remove("btn-primary");

    btnLogIn.classList.add("btn-secondary");
    btnSignUp.classList.remove("btn-secondary");

});

