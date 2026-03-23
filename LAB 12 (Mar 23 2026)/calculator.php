<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    Number 1: <input type="number" name="n1"><br><br>
    Number 2: <input type="number" name="n2"><br><br>

    <input type="submit" name="calculate">
</form>

<?php
if (isset($_POST['calculate'])) {

    if (empty($_POST['n1'])) 
    {
        echo "<b>Please enter the first number</b><br>";
    }
    else if (empty($_POST['n2'])) 
    {
        echo "<b>Please enter the second number</b><br>";
    } 
    else 
    {

        $a = $_POST['n1'];
        $b = $_POST['n2'];

        echo "<b>Addition: </b>" . ($a + $b) . "<br>";
        echo "<b>Subtraction: </b>" . ($a - $b) . "<br>";
        echo "<b>Multiplication: </b>" . ($a * $b) . "<br>";

        if ($b != 0) {
            echo "<b>Division: </b>" . ($a / $b) . "<br>";
        } else {
            echo "<b>Division: </b>Cannot divide by zero<br>";
        }
    }
}
?>

</body>
</html>