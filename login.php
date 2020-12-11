<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "38urok");

	$query = mysqli_query($connect, "SELECT * FROM users WHERE name='{$_POST['name']}' AND password='{$_POST['password']}'");


	if (mysqli_num_rows($query) == 0){
		header("Location: index.php?lol=Неверный логин или пароль");
	}
	else {
		$resolt = $query->fetch_assoc();
		header("Location: home.php?id={$resolt['id']}");
	}
 ?>