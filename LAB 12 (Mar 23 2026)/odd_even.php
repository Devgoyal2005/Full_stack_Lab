<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd</title>
</head>
<body>

<h2>Check Even or Odd</h2>

<form method="post">
    Enter a number:
    <input type="number" name="num" required><br>
    <input type="submit" name="check">
</form>

<?php
if (isset($_POST['check'])) {
    $num = $_POST['num'];

    if ($num % 2 == 0) {
        echo "<h3>$num is Even</h3>";
    } else {
        echo "<h3>$num is Odd</h3>";
    }
}
?>

</body>
</html>