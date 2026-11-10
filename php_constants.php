
<?php
// Create a constant using define()
// បង្កើត Constant ដោយប្រើ define()
define("SCHOOL", "AU");

// Create a constant using const
// បង្កើត Constant ដោយប្រើ const
const COUNTRY = "Cambodia";

const YEAR = 2026;

/*
Constants cannot be changed after declaration.
Constant មិនអាចប្តូរតម្លៃបានទេ បន្ទាប់ពីបង្កើត។
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Constants</title>
</head>
<body>

    <h2>PHP Constants</h2>

    <?php
    // Display constant values
    echo "School: " . SCHOOL . "<br>";

    echo "Country: " . COUNTRY . "<br>";

    echo "Year: " . YEAR . "<br>";
    ?>

</body>
</html>
