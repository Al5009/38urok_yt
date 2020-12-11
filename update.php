<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "38urok");
	$query1 = mysqli_query($connect, "UPDATE users SET name='{$_GET['name'] }', email='{$_GET['email'] }', phone='{$_GET['phone'] }' WHERE id='{$_GET['id']}'");
	header("Location: account.php?id={$_GET['id']}");
?>