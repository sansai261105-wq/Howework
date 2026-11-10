
<?php
// Function with Return and without Parameter
function getSchoolName(): string {
    return "ABC School";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Function Example 3</title>
</head>
<body>
    <h2>Function Return Without Parameter</h2>

    <?php
    echo "School: " . getSchoolName();
    ?>
</body>
</html>
