
<?php
// Declare a number
$number = 5;

// Declare a NULL variable
$name = null;

// Declare another NULL variable
$country = null;

// Null Coalescing Assignment
// ប្រសិនបើ country ជា NULL នឹងដាក់ Cambodia
$country ??= "Cambodia";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Increment and Null Coalescing</title>
</head>
<body>

    <h2>Increment Operators</h2>

    <?php
    // Display original value
    echo "Original: " . $number . "<br>";

    // Increment: increase value by 1
    $number++;
    echo "Increment: " . $number . "<br>";

    // Decrement: decrease value by 1
    $number--;
    echo "Decrement: " . $number . "<br>";
    ?>

    <h2>Null Coalescing Operator</h2>

    <?php
    // ?? checks whether name is NULL or not set
    // ប្រើ Guest ប្រសិនបើ name ជា NULL
    $displayName = $name ?? "Guest";

    echo "Name: " . $displayName . "<br>";

    // ??= assigns a value only if country is NULL or unset
    echo "Country: " . $country . "<br>";
    ?>

</body>
</html>
