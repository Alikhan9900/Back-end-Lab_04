<?php
// autoload.php

/**
 * Функція автопідключення класів з урахуванням неймспейсів
 * @param string $className Ім'я класу, який потрібно підключити
 */
function my_autoloader($className) {
    // Отримуємо шлях до файлу класу з урахуванням неймспейсу
    $file = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    // Перевіряємо, чи файл існує, та підключаємо його, якщо так
    if (file_exists($file)) {
        include_once $file;
    }
}

// Реєстрація функції автопідключення класів
spl_autoload_register('my_autoloader');
