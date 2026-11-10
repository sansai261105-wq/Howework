
<?php
// Create Multidimensional Array
$students = [
    ["Sokha", 20, "IT"],
    ["Dara", 21, "Network"],
    ["Sreyneang", 19, "Programming"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Multidimensional Array</title>
</head>
<body>
    <h2>Multidimensional Array</h2>

    <?php
    foreach ($students as $student) {
        echo "Name: " . $student[0] . "<br>";
        echo "Age: " . $student[1] . "<br>";
        echo "Major: " . $student[2] . "<br>";
        echo "<hr>";
    }
    ?>
</body>
</html>
