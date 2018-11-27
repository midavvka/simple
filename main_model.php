<?php 
//Подключение к БД
$mysqli = mysqli_connect("localhost", "root", "", "myshop");
// Пропущена обработка ошибок
//Кодировка подключения
mysqli_set_charset($mysqli,'utf8');
// Запрос всех категорий
$res = mysqli_query($mysqli, "SELECT * FROM `categories`");
// Формирование результатов
while($row = mysqli_fetch_assoc($res))
	$categories[] = $row;
	
$results = array(
	'title' => 'Категории' , 
	'content'=>$categories
);
?>