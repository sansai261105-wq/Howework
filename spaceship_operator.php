
<?php
// Declare three variables
$a = 10;
$b = 20;
$c = 10;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Spaceship Operator</title>
</head>
<body>

    <h2>Spaceship Operator</h2>

    <?php
    // Returns -1 because 10 is smaller than 20
    echo "10 <=> 20 = " . ($a <=> $b) . "<br>";

    // Returns 1 because 20 is greater than 10
    echo "20 <=> 10 = " . ($b <=> $a) . "<br>";

    // Returns 0 because both values are equal
    echo "10 <=> 10 = " . ($a <=> $c) . "<br>";
    ?>

</body>
</html>
