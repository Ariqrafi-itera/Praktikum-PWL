<?php

session_start();
require './FBInit.php';

?>

<!DOCTYPE html>
<html>

<head>
	<title>Login Successful</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="main-container">
		<h1 class="login-success">
			<center>Hello
				<?php
				if (isset($_SESSION['access_token'])) {
					echo $user->getField('name');
				}
				?>, Login successful !</center>
		</h1>
	</div>
</body>

</html>