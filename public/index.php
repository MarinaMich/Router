<?php

/* Создаем массив с названиями маршрутов и прописанными путями к ним*/
$routes = [
	'/'=> 'functions/homepage.php',
	'/about' => 'functions/about.php'
];

/* Из глобальной переменной $_SERVER получаем значение, которое прописываем в адресной строке*/
$route = $_SERVER['REQUEST_URI'];

/**
 * Проверяем есть ли в массиве $routes значение соответствующее $_SERVER['REQUEST_URI']
 * Если есть, переходим по соответствующему пути
 * Если нет, выводим ошибку 404
 */
if(array_key_exists($route, $routes)) {
	include '../' . $routes[$route]; exit;
} else {
	echo 'Страницы не существует. 404';
}