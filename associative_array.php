
<?php
// Create Associative Array
$student = [
    "name" => "San Sai",
    "age" => 20,
    "major" => "Information Technology"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Associative Array</title>
</head>
<body>
    <h2>Associative Array</h2>

    <?php
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Major: " . $student["major"] . "<br>";
    ?>
</body>
</html>
