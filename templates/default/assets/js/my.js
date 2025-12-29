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

document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('callbackForm');
    var msg  = document.getElementById('formMessage');

    if (!form || !msg) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault(); // пока никуда не отправляем

        var uname   = form.uname.value.trim();
        var tel     = form.tel.value.trim();
        var email   = form.email.value.trim();
        var message = form.message.value.trim();

        // простая проверка имени
        if (uname.length < 2) {
            msg.className = 'form-message error';
            msg.textContent = 'Введите корректное имя.';
            return;
        }

        // простая проверка телефона (минимум 6 цифр)
        if (!tel.match(/\d{6,}/)) {
            msg.className = 'form-message error';
            msg.textContent = 'Введите корректный телефон.';
            return;
        }

        // необязательная почта, но если есть — проверяем
        if (email && !email.match(/^[^@\s]+@[^@\s]+\.[^@\s]+$/)) {
            msg.className = 'form-message error';
            msg.textContent = 'Введите корректный e-mail.';
            return;
        }

        // проверка сообщения
        if (message && message.length < 5) {
            msg.className = 'form-message error';
            msg.textContent = 'Сообщение слишком короткое.';
            return;
        }

        // здесь пока только имитируем успех
        msg.className = 'form-message success';
        msg.textContent = 'Заявка прошла проверку';

        // позже сюда добавим реальный fetch / отправку на сервер
    });
});
