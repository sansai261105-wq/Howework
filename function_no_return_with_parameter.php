
<?php
// Function with Parameters and without Return
function showStudent($name, $age): void {
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Function Example 2</title>
</head>
<body>
    <h2>Function With Parameters</h2>

    <?php
    showStudent("San Sai", 20);
    ?>
</body>
</html>
