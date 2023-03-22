<!DOCTYPE html>
<html>

<head>
	<title>Gym Management System - Register</title>
	<style>
		body {
			background-color: #f1f1f1;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}

		.container {
			max-width: 500px;
			margin: auto;
			padding: 20px;
			background-color: #ffffff;
			border-radius: 10px;
			box-shadow: 0 0 10px #ccc;
		}

		h1 {
			font-size: 32px;
			margin-top: 0;
			margin-bottom: 20px;
			font-weight: bold;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			color: #1e1e1e;
			text-align: center;
		}

		form {
			display: flex;
			flex-direction: column;
		}

		label {
			font-size: 20px;
			margin-bottom: 10px;
			color: #1e1e1e;
		}

		input {
			font-size: 18px;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			box-sizing: border-box;
		}

		button {
			font-size: 20px;
			padding: 10px 20px;
			background-color: #4CAF50;
			color: #ffffff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		button:hover {
			background-color: #1e1e1e;
		}
	</style>
</head>

<body>

<div class="container">
		<h1>Create an Account</h1>
		<form action="home.php" method="get" onsubmit="return validateForm()">
			<label for="firstInput">First Name:</label>
			<input type="text" id="firstInput" name="firstInput" required>

			<label for="LastInput">Last Name:</label>
			<input type="text" id="LastInput" name="lastInput" required>

			<label for="addressInput">Address:</label>
			<input type="text" id="addressInput" name="addressInput" required>

			<label for="contactInput">Contact Number:</label>
			<input type="tel" id="contactInput" name="contactInput" placeholder="090-000-0000"
				pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

			<label for="emailInput">Email:</label>
			<input type="email" id="emailInput" placeholder="name@gmail.com" name="emailInput" required>

			<button type="submit">Register</button>
		</form>
	<?php
	session_start();
	function validateForm()
	{
		$firstName = $_POST["firstInput"];
		$lastName = $_POST["lastInput"];
		$address = $_POST["addressInput"];
		$contact = $_POST["contactInput"];
		$email = $_POST["emailInput"];
		$emailPattern = '/^\S+@\S+\.\S+$/';

		if (
			empty($firstName) ||
			empty($lastName) ||
			empty($contact) ||
			empty($address) ||
			empty($email)
		) {
			echo "All fields must be filled out";
			return false;
		} else if (!preg_match($emailPattern, $email)) {
			echo "Invalid email format";
			return false;
		} else if (!preg_match("/^\d{11}$/", $contact)) {
			echo "Invalid contact format! Put numbers only.";
			return false;
		} else {
			echo "Register Complete!";
			return true;
		}
	}
	?>
	</div>
</body>

</html>