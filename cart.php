<?php 
	// Добавление в корзину
	if(isset($_POST['cart']) && isset($_POST['count']) &&  $_POST['count'] > 0 && !empty($_GET['id'])){
		$id = (int)$_GET['id']; 
		$_SESSION['cart'][$id] = $_POST['count'];
	}


	if(isset($_SESSION['cart']))
		$cart_count = count($_SESSION['cart']);
	else
		$cart_count = 0;
?>