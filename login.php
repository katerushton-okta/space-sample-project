<?php

session_start();

$password = "<add_password_here>";

if (isset($_POST['password'])) {

	if (strtolower($_POST['password']) == $password){
		$_SESSION['loggedin'] = true;
		header('location: /');

	} else {
		echo("<div style='color:red'>Invalid password</div>");
	}
}

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
		<title>Log in</title>
		<link rel="stylesheet" href="css/odyssey.css"/>
		<style>
			body {
				padding:24px;
				background: #f5f5f5;
			}
			main {
				width:500px;
				margin:0 auto;
				background: #fff;
				border-radius:4px;
				padding:24px;
			}

		</style>
	</head>

	<body>
		<main>
			<h4>Enter the password to continue</h4>
			<form action="" method="post">
				<fieldset class="ods-fieldset">
					<label class="ods-label" for="password">Password</label>
					<input type="password" class="ods-text-input" name="password" id="password">
				</fieldset>
				<fieldset class="ods-fieldset">
					<input type="submit" name="submit" class="ods-button" value="Submit">
				</fieldset>
			</form>
		</main>
	</body>
</html>


