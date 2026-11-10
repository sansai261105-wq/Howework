
<?php
// Assign value 10 to variable a
$a = 10;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Assignment Operators</title>
</head>
<body>

    <h2>Assignment Operators</h2>

    <?php
    // Display original value
    echo "Initial: " . $a . "<br>";

    // Add 5 to a
    // Same as $a = $a + 5
    $a += 5;
    echo "10 += 5: " . $a . "<br>";

    // Subtract 2 from a
    // Same as $a = $a - 2
    $a -= 2;
    echo "15 -= 2: " . $a . "<br>";

    // Multiply a by 2
    // Same as $a = $a * 2
    $a *= 2;
    echo "13 *= 2: " . $a . "<br>";

    // Divide a by 2
    // Same as $a = $a / 2
    $a /= 2;
    echo "26 /= 2: " . $a . "<br>";

    // Get the remainder when divided by 3
    // Same as $a = $a % 3
    $a %= 3;
    echo "2 %= 3: " . $a . "<br>";
    ?>

</body>
</html>
