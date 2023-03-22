<!DOCTYPE html>
<html>

<head>
    <title>Available Gym Classes</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            margin: 0 auto;
            max-width: 800px;
            padding: 20px;
            text-align: center;
        }

        .class {
            background-color: #f7f7f7;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            display: inline-block;
            margin: 20px;
            padding: 20px;
            width: calc(50% - 40px);
        }

        .class h2 {
            color: #333;
            font-size: 24px;
            margin-top: 0;
        }

        .class p {
            color: #666;
            margin-bottom: 10px;
        }

        .class p.price {
            color: #00aaff;
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }

        .class:nth-child(1) {
            background-color: #c3e7f5;
        }

        .class:nth-child(2) {
            background-color: #c4e4c4;
        }

        .class:nth-child(3) {
            background-color: #f9d7b4;
        }

        .class:nth-child(4) {
            background-color: #a7b8d8;
        }

        .button {
            background-color: #00aaff;
            border-radius: 5px;
            color: #ffffff;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .button:hover {
            background-color: #0077cc;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Available Gym Classes</h1>
        <?php
        // Array of available gym classes
        $classes = array(
            array(
                'name' => 'Yoga',
                'description' => 'A gentle and relaxing class that focuses on flexibility and balance.',
                'price' => '$10 per session'
            ),
            array(
                'name' => 'Spinning',
                'description' => 'A high-energy cycling class that gets your heart pumping and your legs working.',
                'price' => '$15 per session'
            ),
            array(
                'name' => 'Pilates',
                'description' => 'A low-impact class that focuses on strengthening and toning your core muscles.',
                'price' => '$12 per session'
            ),
            array(
                'name' => 'Bootcamp',
                'description' => 'A challenging full-body workout that combines cardio and strength training.',
                'price' => '$20 per session'
            )
        );

        // Loop through each class and display its details
        foreach ($classes as $class) {
            echo '<div class="class">';
            echo '<h2>' . $class['name'] . '</h2>';
            echo '<p>' . $class['description'] . '</p>';
            echo '<p><strong>Price:</strong> ' . $class['price'] . '</p>';
            echo '</div>';
        }
        ?>
        <br>
        <a class="button" href="home.php">Go Back to Homepage</a>

    </div>
</body>

</html>