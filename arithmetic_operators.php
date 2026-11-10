
<?php
// Declare two numbers
$a = 20;
$b = 10;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operators</title>
</head>
<body>

    <h2>Arithmetic Operators</h2>

    <?php
    // Addition: 20 + 10 = 30
    echo "Addition: " . ($a + $b) . "<br>";

    // Subtraction: 20 - 10 = 10
    echo "Subtraction: " . ($a - $b) . "<br>";

    // Multiplication: 20 * 10 = 200
    echo "Multiplication: " . ($a * $b) . "<br>";

    // Division: 20 / 10 = 2
    echo "Division: " . ($a / $b) . "<br>";

    // Modulus: remainder after division
    echo "Modulus: " . ($a % $b) . "<br>";

    // Exponentiation: 20 to the power of 2
    echo "Exponentiation: " . ($a ** 2) . "<br>";
    ?>

</body>
</html>
