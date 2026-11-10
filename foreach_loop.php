
<?php
// Create an Array of students
$students = ["Sokha", "Dara", "Sreyneang", "Vibol"];

// Loop through each element in the Array
foreach ($students as $student) {

    // Display each student's name
    echo "Student Name: " . $student . "<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Foreach Loop</title>
</head>
<body>
    <h2>Foreach Loop Example</h2>

    <?php
    $subjects = ["PHP", "HTML", "CSS", "JavaScript"];

    // Get each subject from the Array
    foreach ($subjects as $subject) {
        echo "Subject: " . $subject . "<br>";
    }
    ?>
</body>
</html>
