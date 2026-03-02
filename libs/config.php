<?php
// Определяем окружение по домену или IP
$isLocal = in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1', 'localhost']) || 
           strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;

if ($isLocal) {
    // Локальная разработка
    if (file_exists(__DIR__ . '/config.local.php')) {
        require_once __DIR__ . '/config.local.php';
    } else {
        die('Ошибка: Не найден файл config.local.php. Создайте его по примеру.');
    }
} else {
    // Продакшен сервер
    if (file_exists(__DIR__ . '/config.server.php')) {
        require_once __DIR__ . '/config.server.php';
    } else {
        die('Ошибка: Не найден файл config.server.php.');
    }
}
