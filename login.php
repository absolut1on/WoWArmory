<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<?php
		?>
		<div class="login">
			<h1>Login</h1>
			<form action="http://localhost:3000/authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<font color="white">Realm: </font> <select name = "realm" id = "realm">
					<option value="Frostwolf">Frostwolf</option>
					<option value="Outland">Outland</option>
					<option value="Lordaeron">Lordaeron</option>
					<option value="Icecrown">Icecrown</option>
					<option value="Blackrock">Blackrock</option>
					</select>
				<input type="submit" value="Login">
			</form>
			</div>
	</body>
</html>