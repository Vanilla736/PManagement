<!DOCTYPE html>
<html>
<head>
    <title>Payments Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }
        h1 {
            text-align: center;
            color: #444444;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px #cccccc;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #444444;
        }
        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <h1>Payments Page</h1>
    <form method="post" action="home.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount">
        <input type="submit" value="Pay">
    </form>
</body>
</html>
