<?php
// Отправляем правильную кодировку
header('Content-Type: text/html; charset=UTF-8');
print('Привет, мир!');

// Выводим все полученные через POST параметры
if($_SERVER['REQUEST_METHOD']=='POST'){
    print_r($_POST);
}
?>