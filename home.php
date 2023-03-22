<!DOCTYPE html>
<html>
<head>
	<title>Gym Management System</title>
	<style>
		body {
			background-color: #f1f1f1;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
		.container {
			max-width: 1200px;
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
		.card {
			background-color: #f7f7f7;
			border: 1px solid #e1e1e1;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 5px #ccc;
			margin-bottom: 20px;
			box-sizing: border-box;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 200px;
			transition: box-shadow 0.3s ease-in-out;
			cursor: pointer;
		}
		.card:hover {
			box-shadow: 0 0 10px #4CAF50;
		}
		.card h2 {
			font-size: 24px;
			font-weight: normal;
			color: #1e1e1e;
			margin-bottom: 10px;
			text-align: center;
		}
		.card a {
			text-decoration: none;
			color: #4CAF50;
			font-size: 18px;
			margin-top: 20px;
			font-weight: bold;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
		.card a:hover {
			color: #1e1e1e;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Welcome to the Gym Management System</h1>
		<div class="card">
			<h2>Registration</h2>
			<a href="register.php">View to Register an Account</a>
		</div>
		<div class="card">
			<h2>Classes</h2>
			<a href="class.php">View Classes</a>
		</div>
		<div class="card">
			<h2>Instructors</h2>
			<a href="#">View Instructors</a>
		</div>
		<div class="card">
			<h2>Payments</h2>
			<a href="payment.php">View Payments</a>
		</div>
		<div class="card">
			<h2>Members Section</h2>
			<a href="#">View Employee</a>
		</div>
	</div>
</body>
</html>
