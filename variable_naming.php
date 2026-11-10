
<?php
// Declare a String variable
// អថេរប្រភេទអក្សរ
$name = "San Sai";

// Declare an Integer variable
// អថេរប្រភេទចំនួនគត់
$age = 20;

// Declare a Float variable
// អថេរប្រភេទចំនួនទសភាគ
$score = 85.5;

// Variable name can contain underscore
// អាចប្រើសញ្ញា _ នៅក្នុងឈ្មោះអថេរ
$student_name = "Sokha";

/*
Variable Naming Rules:
1. Variable must start with $
2. Variable name starts with a letter or underscore
3. Variable name cannot start with a number
4. Variable names are case-sensitive
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Variable Naming</title>
</head>
<body>

    <h2>Variable Declaration</h2>

    <?php
    // Display variable values
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Score: " . $score . "<br>";
    echo "Student: " . $student_name . "<br>";
    ?>

</body>
</html>
