
<?php
// Initialize variable
$i = 1;

// Execute code first
do {

    // Display current number
    echo "Number: " . $i . "<br>";

    // Increase value by 1
    $i++;

} while ($i <= 5); // Check condition after execution
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Do While Loop</title>
</head>
<body>
    <h2>Do While Loop Example</h2>

    <?php
    $number = 1;

    do {
        echo "Welcome " . $number . "<br>";
        $number++;

    } while ($number <= 5);
    ?>
</body>
</html>
