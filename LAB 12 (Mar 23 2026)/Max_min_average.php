<!DOCTYPE html>
<html>
<head>
    <title>Three Numbers Calculation</title>
</head>
<body>

<h2>Enter Three Numbers</h2>

<form method="post">
    Number 1: <input type="number" name="n1" required><br><br>
    Number 2: <input type="number" name="n2" required><br><br>
    Number 3: <input type="number" name="n3" required><br><br>

    <input type="submit" name="calculate">
</form>

<?php
if (isset($_POST['calculate'])) {

    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $c = $_POST['n3'];

    // Maximum
    $max = $a;
    if ($b > $max) $max = $b;
    if ($c > $max) $max = $c;

    // Smallest
    $min = $a;
    if ($b < $min) $min = $b;
    if ($c < $min) $min = $c;

    // Average
    $avg = ($a + $b + $c) / 3;

    echo "<h3>Maximum: $max</h3>";
    echo "<h3>Smallest: $min</h3>";
    echo "<h3>Average: $avg</h3>";
}
?>

</body>
</html>