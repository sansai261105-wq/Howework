

<?php
// បង្កើត Function ដែលទទួល Parameter ឈ្មោះ name
function greet($name) {
    return "Hello " . $name;
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Function 2</title>
</head>
<body>

    <h2>Function With Parameter</h2>

    <?php
    echo greet("Sokha");
    ?>

</body>
</html>
