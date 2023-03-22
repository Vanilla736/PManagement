<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
		form {
			background-color: white;
			border: 1px solid #ccc;
			padding: 20px;
			width: 300px;
			margin: auto;
			margin-top: 50px;
			border-radius: 5px;
			box-shadow: 0 0 5px #ccc;
		}
		input[type="text"], input[type="password"] {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			font-size: 16px;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
		h2 {
			font-size: 24px;
			margin-top: 0;
			margin-bottom: 20px;
			font-weight: normal;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
		label {
			display: block;
			font-size: 16px;
			margin-bottom: 5px;
			font-weight: bold;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<h2>Login</h2>
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" required>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required>
		<input type="submit" value="Login">

        <?php
		// Check if the form was submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Get the username and password from the form
			$username = $_POST["username"];
			$password = $_POST["password"];

			// Check if the username and password are correct
			if ($username == "admin" && $password == "password") {
				// Redirect to the home page or dashboard
				header("Location: home.php");
				exit();
			} else {
				// Display an error message
				echo "<p class='error'>Invalid username or password. Please try again.</p>";
			}
		}
		?>
	</form>
</body>
</html>
