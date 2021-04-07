<?php

$login = "";
$pas    = "";
$res = TRUE;

$db = mysqli_connect('localhost', 'root', '', 'site');

if (isset($_POST['reg_user'])) {
	$res = TRUE;
	setcookie('user', "", time()-3600, "/");

	$name = mysqli_real_escape_string($db, $_POST['name']);
	$login = mysqli_real_escape_string($db, $_POST['login']);
	$pas1 = mysqli_real_escape_string($db, $_POST['pas1']);
	$pas2 = mysqli_real_escape_string($db, $_POST['pas2']);

	if (empty($name)) { $res = FALSE; header("Location: http://localhost/site/register.php?error=name"); exit;}
	if (empty($login)) { $res = FALSE; header("Location: http://localhost/site/register.php?error=email"); exit;}
	if (empty($pas1)) { $res = FALSE; header("Location: http://localhost/site/register.php?error=pas"); exit;}
	if ($pas1 != $pas2) { $res = FALSE; header("Location: http://localhost/site/register.php?error=non"); exit;}

	$user_check_query = "SELECT * FROM user WHERE name='$name' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	if ($user) { 
		if ($user['name'] == $name) {
			setcookie('errors', "Пользователь уже существует", time() + 3600, "/");
			$res = FALSE; header("Location: http://localhost/site/register.php?error=al");
			exit;
		}
	}

	$user_check_query = "SELECT * FROM user WHERE email='$login' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	if ($user) { 
		if ($user['name'] == $name) {
			setcookie('errors', "Пользователь уже существует", time() + 3600, "/");
			$res = FALSE; header("Location: http://localhost/site/register.php?error=al");
			exit;
		}
	}

	if ($res) {
		$pas = md5($pas1);

		$query = "INSERT INTO user (name,email,pas) 
		VALUES('$name', '$login', '$pas')";

		mysqli_query($db, $query);

		setcookie('user', $name, time() + 3600, "/");

		header("Location: http://localhost/site/main.php");
	}
}

if (isset($_POST['login_user'])) {
	$res = TRUE;
	setcookie('user', "", time()-3600, "/");

	$login = mysqli_real_escape_string($db, $_POST['login']);
	$pas = mysqli_real_escape_string($db, $_POST['pas']);

	if (empty($login)) { header("location: http://localhost/site/login.php?error=email");$res = FALSE;exit; }
	if (empty($pas)) { header("location: http://localhost/site/login.php?error=pas");$res = FALSE; exit;}

	if ($res) {
		$pas = md5($pas);
		$query = "SELECT * FROM user WHERE email='$login' AND pas='$pas'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
			setcookie('user', $login, time() + 3600, "/");
			header("location: http://localhost/site/main.php");
		}else {
			setcookie('errors', "Неправильный e-mail/пароль", time() + 3600, "/");
			$res = FALSE;
			header("location: http://localhost/site/login.php?error=er");
			exit;
		}
	}
}

?>