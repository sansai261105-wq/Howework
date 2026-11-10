<?php

// បង្កើត Function ដែលមិនបញ្ជូនតម្លៃត្រឡប់
function showHeaderBanner(): void {

    // បង្ហាញចំណងជើងប្រព័ន្ធ
    echo "Welcome to Student Management System!<br>";

}
// ហៅប្រើប្រាស់ Function
showHeaderBanner();

?>
<?php
$students = ["Sokha", "Dara", "Vibol"];
$name = "Hello PHP";

// Array Functions
$total = count($students);
array_push($students, "Sreyneang");

// String Functions
$length = strlen($name);
$upper = strtoupper($name);
$lower = strtolower($name);

// Inspection Functions
$type = gettype($students);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Built-in Functions</title>
</head>
<body>
    <h2>Array Functions</h2>
    <?php
    echo "Total Students: " . $total . "<br>";
    echo "Students: ";
    print_r($students);
    ?>

    <h2>String Functions</h2>
    <?php
    echo "<br>Length: " . $length . "<br>";
    echo "Uppercase: " . $upper . "<br>";
    echo "Lowercase: " . $lower . "<br>";
    ?>

    <h2>Inspection Functions</h2>
    <?php
    echo "Data Type: " . $type . "<br>";
    var_dump($name);
    ?>
</body>
</html>
