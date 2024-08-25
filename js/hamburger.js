document.addEventListener('DOMContentLoaded', () => {

    const menu = document.getElementById("hamburger-menu");
    const button = document.getElementById("hamburger-button");
    const close = document.getElementById("close-button");
    const header = document.querySelector('header');
    const body = document.querySelector('body');

    button.addEventListener('click',() => {
        button.classList.add('is-active');
        menu.classList.add('is-active');
        close.classList.add('is-active');
        header.classList.add('is-active');
        body.classList.add('is-active');

        menu.style.top = `${window.scrollY}px`;
    });

    close.addEventListener('click',() => {
        button.classList.remove('is-active');
        menu.classList.remove('is-active');
        close.classList.remove('is-active');
        header.classList.remove('is-active');
        body.classList.remove('is-active');
    });

});