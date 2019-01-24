<?php 
//main_model.php

include 'db.php';
// Запрос всех категорий
$res = mysqli_query($mysqli, "SELECT * FROM `categories`");
// Формирование результатов
while($row = mysqli_fetch_assoc($res))
	$categories[] = $row;
// ========Товары========

//Запрос всех товаров
$SQLgoods = "SELECT 
`goods`.`id`,
`goods`.`name`,
`price`,
`description`,
`goods`.`image`, 
`categories`.`name` AS `cname` 
FROM `goods`,`categories` 
WHERE `goods`.`cat_id`=`categories`.`id`";

// id категории
if(!empty($_GET['catid']))
{
	$catid = (int)$_GET['catid'];
	$SQLgoods.="AND `categories`.`id` = $catid";
}
	

$res = mysqli_query($mysqli, $SQLgoods);
while($row = mysqli_fetch_assoc($res))
	$goods[] = $row;


$results = array(
	'title' => 'Категории' , 
	'categories'=>$categories,
	'goods'=>$goods
);

?>