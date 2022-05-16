window.addEventListener('DOMContentLoaded', e => {
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('.menu-primary-container');

    hamburger.addEventListener('click', e => {
        nav.classList.toggle('menu-open');
    });

    const navItems = document.querySelectorAll('.menu-item');

    for (let i = 0; i < navItems.length; i++) {
        if (navItems[i].children.length > 1) {
            if (navItems[i].children[1].classList[0] == "sub-menu") {
                navItems[i].innerHTML += `<svg class="arrow-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg>`;
                navItems[i].addEventListener('click', e => {
                    navItems[i].children[1].classList.toggle('sub-menu-open');
                })
            }
        }
    }
})