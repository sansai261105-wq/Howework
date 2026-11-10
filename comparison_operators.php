
<?php
// Integer value
$a = 10;

// String value
$b = "10";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comparison Operators</title>
</head>
<body>

    <h2>Comparison Operators</h2>

    <?php
    // Loose comparison
    // ប្រៀបធៀបតម្លៃ ដោយអាចបម្លែងប្រភេទទិន្នន័យ
    var_dump($a == $b);
    echo " - Loose Comparison (==)<br>";

    // Strict comparison
    // ប្រៀបធៀបទាំងតម្លៃ និងប្រភេទទិន្នន័យ
    var_dump($a === $b);
    echo " - Strict Comparison (===)<br>";

    // Check whether values are not equal
    var_dump($a != $b);
    echo " - Not Equal (!=)<br>";

    // Check whether values are not identical
    var_dump($a !== $b);
    echo " - Not Identical (!==)<br>";

    // Check whether a is greater than 5
    var_dump($a > 5);
    echo " - Greater Than (>)<br>";

    // Check whether a is less than 20
    var_dump($a < 20);
    echo " - Less Than (<)<br>";
    ?>

</body>
</html>
