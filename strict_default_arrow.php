<?php
declare(strict_types=1);

// Strict Types
function calculate(int $a, int $b): int {
    return $a + $b;
}

// Default Parameter
function greet(string $name = "Student"): string {
    return "Hello " . $name;
}

// Arrow Function
$double = fn(int $number): int => $number * 2;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Strict Types and Arrow Function</title>
</head>
<body>
    <h2>Strict Types</h2>
    <?php
    echo "Total: " . calculate(10, 20) . "<br>";
    ?>

    <h2>Default Parameter</h2>
    <?php
    echo greet() . "<br>";
    echo greet("Sokha") . "<br>";
    ?>

    <h2>Arrow Function</h2>
    <?php
    echo "Double: " . $double(10);
    ?>
</body>
</html>