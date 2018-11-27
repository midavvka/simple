<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Supersite.com</title>
</head>
<body>
	<h1> <?php echo $results['title']; ?> </h1>
	<?php 
		foreach ($results['content'] as $item) {
			echo "<p><a href=\"?model=catalog&cat_id={$item['id']}\"> 
			{$item['name']} 
			</a></p>";
		}
	 ?>
</body>
</html>