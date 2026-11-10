
<?php
// Global variable
// អថេរដែលបង្កើតនៅខាងក្រៅ Function
$school = "AU";

// Local Scope
// អថេរដែលប្រើបានតែនៅក្នុង Function
function showName() {

    $name = "San Sai";

    echo "Local Name: " . $name . "<br>";
}

// Global Scope
// ប្រើ global ដើម្បីយកអថេរខាងក្រៅ Function
function showSchool() {

    global $school;

    echo "Global School: " . $school . "<br>";
}

// Static Scope
// static រក្សាតម្លៃចាស់ទុកពេលហៅ Function ម្តងទៀត
function counter() {

    static $count = 0;

    // Increase count by 1
    $count++;

    echo "Count: " . $count . "<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Variable Scope</title>
</head>
<body>

    <h2>Variable Scope</h2>

    <?php
    // Call local function
    showName();

    // Call global function
    showSchool();

    // Call static function three times
    counter();
    counter();
    counter();
    ?>

</body>
</html>
