
<?php
// Initialize variable
$i = 1;

// Check condition before running the loop
while ($i <= 5) {

    // Display current number
    echo "Number: " . $i . "<br>";

    // Increase value by 1
    $i++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP While Loop</title>
</head>
<body>
    <h2>While Loop Example</h2>

    <?php
    $number = 1;

    while ($number <= 5) {
        echo "Hello PHP " . $number . "<br>";

        // Increase number to avoid infinite loop
        $number++;
    }
    ?>
</body>
</html>
