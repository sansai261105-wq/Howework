
<?php
// Function with Return and Parameters
function addition($a, $b): int {
    return $a + $b;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Function Example 4</title>
</head>
<body>
    <h2>Function Return With Parameters</h2>

    <?php
    echo "Total: " . addition(10, 20);
    ?>
</body>
</html>
