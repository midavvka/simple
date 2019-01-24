<?php 
// Очищаем корзину
if(isset($_GET['clear']))
	unset($_SESSION['cart']);

// Удаление товара из корзины
if(isset($_GET['delete'])){
	unset($_SESSION['cart'][$_GET['delete']]);
	
}

include 'cart.php';

if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
	include 'db.php';

	// print_r($_SESSION['cart']);

	$strId ='';
	foreach ($_SESSION['cart'] as $id => $item_count) {
		$strId .= "`goods`.`id` = $id OR";
	}
	// echo $strId;
	$strId = mb_substr($strId, 0, -3);

	//Запрос товара по id
	$SQLgoods = "SELECT 
	`goods`.`id`,
	`goods`.`name`,
	`price`,
	`description`,
	`goods`.`image`, 
	`categories`.`name` AS `cname` 
	FROM `goods`,`categories` 
	WHERE `goods`.`cat_id`=`categories`.`id`
	AND ($strId)
	";
echo $SQLgoods;

	$res = mysqli_query($mysqli, $SQLgoods);
	
	while( $good = mysqli_fetch_assoc($res))
	{
		$count_tmp = $_SESSION['cart'][$good['id']];
		$good['count'] = $count_tmp;
		$goods_in_cart[] = $good;
	}

	$results = array(
		'empty'=>False,
		'cart'=>$goods_in_cart
	);
	// print_r($goods_in_cart);
}
else
$results = array(
		'empty'=>True
	);
?>