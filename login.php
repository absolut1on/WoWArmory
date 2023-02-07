<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
	    <link rel="stylesheet" href="regStyle.css">
	</head>
	<body>
	<div style="margin-top: 15%;" class="login-page">
  		<div class="form">
		  <h1>Log In</h1>
    		<form class="login-form" action="http://localhost:3000/authenticate.php" method="post" autocomplete="off">
			<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>

				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<select name = "realm" id = "realm">
					<option value="null">Please Select Realm</option>
					<option value="Frostwolf">Frostwolf</option>
					<option value="Outland">Outland</option>
					<option value="Lordaeron">Lordaeron</option>
					<option value="Icecrown">Icecrown</option>
					<option value="Blackrock">Blackrock</option>
					</select>
				<button type="submit" value="Register">Login</button>
				<p style="margin-top: 20px;">
				<div class='no-acc'>
                   <a href = "./register.php"> Don't have an Account? Sign up!</a>
				</div>
				</p>
				
    		</form>
  		</div>
	</div>

	</body>
</html>