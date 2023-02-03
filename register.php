<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" href="regStyle.css">
		<meta charset="utf-8">
		<title>Register</title>
		
	</head>
	<body>

	<div style="margin-top: 15%;" class="login-page">
  		<div class="form">
		  <h1>Register</h1>
    		<form class="login-form" action="http://localhost:3000/regToDB.php" method="post" autocomplete="off">
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
				<input type="email" name="email" placeholder="Email" id="email" required>

				<select name = "realm" id = "realm">
					<option value="null">Please Select Realm</option>
					<option value="Frostwolf">Frostwolf</option>
					<option value="Outland">Outland</option>
					<option value="Lordaeron">Lordaeron</option>
					<option value="Icecrown">Icecrown</option>
					<option value="Blackrock">Blackrock</option>
					</select>
				<button type="submit" value="Register">Create</button>
				<p style="margin-top: 20px;">
				<a  href="./armory.php">Back to Armory</a>
				</p>
				
    		</form>
  		</div>
	</div>

	</body>
</html>