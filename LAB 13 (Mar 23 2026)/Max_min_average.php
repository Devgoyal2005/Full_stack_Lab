<!DOCTYPE html>
<html>
<head>
    <title>Three Numbers Calculation</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
        }

        input {
            padding: 6px;
            margin: 5px;
        }
    </style>

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

    echo "<h3 style='color:green;'>Maximum: $max</h3>";
    echo "<h3 style='color:blue;'>Smallest: $min</h3>";
    echo "<h3 style='color:purple;'>Average: $avg</h3>";
}
?>

</body>
</html>