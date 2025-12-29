document.addEventListener('DOMContentLoaded', function () {
    var burger = document.querySelector('.header .headerm');
    var nav    = document.querySelector('.header .nav');

    if (!burger || !nav) return;

    // клик по бургеру
    burger.addEventListener('click', function (e) {
        e.preventDefault();
        burger.classList.toggle('active');
        nav.classList.toggle('active');
    });

    // закрывать меню при клике по пункту
    nav.addEventListener('click', function (e) {
        if (e.target.tagName.toLowerCase() === 'a') {
            burger.classList.remove('active');
            nav.classList.remove('active');
        }
    });
});
