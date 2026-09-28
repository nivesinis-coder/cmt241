<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 40px;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #2c3e50;
    }

    h2 {
        color: #3498db;
        border-bottom: 2px solid #3498db;
        padding-bottom: 8px;
    }

    p {
        background-color: white;
        padding: 12px 15px;
        margin: 10px 0;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>
    <h1>Geometric calculations</h1>
    <?php
    $side1 = 4;
    $side2 = 8;
    $area = $side1*$side2;

    $radius = 3;
    $circumference = 2*pi()*$radius;

    $height = 20;
    $volume = pi()*pow($radius,2)*$height;

    echo "<h2>result</h2>";
    echo "<p>rectangle area: ".$area." square inches </p>";
    echo "<p>circle circumference: ".number_format($circumference,2)." inches</p>";
    echo "<p>water tank: ".number_format($volume,2)." cubic inches</p>";







    ?>
    
    
</body>
</html>