<!DOCTYPE html>
<html>
<head>
    <title>Maximum of Three Numbers</title>

    <style>
        body { font-family: Arial; text-align: center; margin-top: 50px; }
        input { padding: 6px; margin: 5px; }
    </style>

</head>
<body>

<h2>Find Maximum</h2>

<form method="post">
    <input type="number" name="n1" required>
    <input type="number" name="n2" required>
    <input type="number" name="n3" required><br>
    <input type="submit" name="find_max" value="Find Max">
</form>

<?php
if (isset($_POST['find_max'])) {
    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $c = $_POST['n3'];

    $max = $a;
    if ($b > $max) $max = $b;
    if ($c > $max) $max = $c;

    echo "<h3 style='color:green;'>Maximum: $max</h3>";
}
?>

</body>
</html>