
<?php
// String data type
$name = "San Sai";

// Integer data type
$age = 20;

// Float data type
$score = 85.5;

// Boolean data type
$isStudent = true;

// Array data type
$subjects = ["PHP", "HTML", "CSS"];

// NULL data type
$address = null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Types</title>
</head>
<body>

    <h2>PHP Data Types</h2>

    <?php
    // var_dump() displays value and data type
    echo "Name: ";
    var_dump($name);
    echo "<br>";

    echo "Age: ";
    var_dump($age);
    echo "<br>";

    echo "Score: ";
    var_dump($score);
    echo "<br>";

    echo "Student: ";
    var_dump($isStudent);
    echo "<br>";

    echo "Subjects: ";
    var_dump($subjects);
    echo "<br>";

    echo "Address: ";
    var_dump($address);
    echo "<br>";

    echo "<h3>Type Checking</h3>";

    // Check whether name is String
    var_dump(is_string($name));
    echo " - is_string()<br>";

    // Check whether age is Integer
    var_dump(is_int($age));
    echo " - is_int()<br>";

    // Check whether score is Float
    var_dump(is_float($score));
    echo " - is_float()<br>";

    // Check whether isStudent is Boolean
    var_dump(is_bool($isStudent));
    echo " - is_bool()<br>";

    // Check whether subjects is Array
    var_dump(is_array($subjects));
    echo " - is_array()<br>";

    // Check whether address is NULL
    var_dump(is_null($address));
    echo " - is_null()<br>";
    ?>

</body>
</html>
