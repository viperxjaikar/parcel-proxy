const wrapper = document.querySelector('.right-section');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnlogin-popup');
const iconClose = document.querySelector('.icon-close');
registerLink.addEventListener('click',() => {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click',() => {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click',() => {
    wrapper.classList.add('active-popup');
});
iconClose.addEventListener('click',() => {
    wrapper.classList.remove('active-popup');
});
function showRegister() {
    document.querySelector('.login').classList.remove('active-form');
    document.querySelector('.register').classList.add('active-form');
}

function showLogin() {
    document.querySelector('.register').classList.remove('active-form');
    document.querySelector('.login').classList.add('active-form');
}

// Set the login form as the default active form
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('.login').classList.add('active-form');
});
