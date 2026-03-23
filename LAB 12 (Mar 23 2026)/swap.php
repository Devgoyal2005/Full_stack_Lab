<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    Number 1: <input type="number" name="n1" required><br><br>
    Number 2: <input type="number" name="n2" required><br><br>

    <input type="submit" name="calculate">
</form>

<?php
if (isset($_POST['calculate'])) {

    $a = $_POST['n1'];
    $b = $_POST['n2'];

    echo "<b>Before Swapping</b>"."<br>";
    echo "Number 1: " . $a."<br>";
    echo "Number 2: " . $b . "<br><br>";

    // Swap the numbers
    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "<b>After Swapping</b>"."<br>";
    echo "Number 1: " . $a."<br>";
    echo "Number 2: " . $b . "<br><br>";
}
?>

</body>
</html>