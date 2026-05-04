<html>
<head>
    <style>
        body { text-align:center; margin-top:100px; background:lightblue; }
        form { background:white; padding:15px; display:inline-block; }
        button { background:lightgreen; }
    </style>
</head>

<body>

<form method="POST">
    <input type="text" name="data" >
    <button name="write">Write</button>
    <button name="read">Read</button>
</form>

<br><br>

<?php
$file = "data.txt";

if(isset($_POST['write'])) {
    file_put_contents($file, $_POST['data']."\n", FILE_APPEND);
    echo "Written";
}

if(isset($_POST['read'])) {
    if(file_exists($file)) {
        echo "<pre>";
        echo file_get_contents($file);
        echo "</pre>";
    } else {
        echo "No file";
    }
}
?>

</body>
</html>