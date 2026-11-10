
<?php
// Declare age variable
$age = 20;

// Declare Boolean variable
$hasID = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logical Operators</title>
</head>
<body>

    <h2>Logical Operators</h2>

    <?php
    // AND (&&)
    // Both conditions must be TRUE
    // ត្រូវការលក្ខខណ្ឌទាំងពីរពិត
    var_dump($age >= 18 && $hasID);
    echo " - AND (&&)<br>";

    // OR (||)
    // At least one condition must be TRUE
    // មានលក្ខខណ្ឌមួយពិតក៏គ្រប់គ្រាន់
    var_dump($age >= 18 || $hasID);
    echo " - OR (||)<br>";

    // NOT (!)
    // Changes TRUE to FALSE or FALSE to TRUE
    // បញ្ច្រាសតម្លៃ Boolean
    var_dump(!$hasID);
    echo " - NOT (!)<br>";
    ?>

</body>
</html>
