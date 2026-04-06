<?php

$message = "";
$newName = "";
$originalName = "";

if(isset($_POST['submit'])) {

    $FOLDER = "uploads/";

    if(!is_dir($FOLDER)) {
        mkdir($FOLDER, 0777, true);
    }

    // File details
    $originalName = $_FILES['file']['name'];
    $fileTmp  = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError= $_FILES['file']['error'];

    // Extension
    $fileExt = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'txt'];

    if(!in_array($fileExt, $allowed)) {
        $message = "❌ Invalid file type!";
    }
    elseif($fileSize > 2000000) { 
        $message = "❌ File too large! Max 2MB.";
    }
    elseif($fileError !== 0) {
        $message = "❌ Upload error!";
    }
    else {
        $newName = uniqid("file_", true) . "." . $fileExt;
        $destination = $FOLDER . $newName;

        if(move_uploaded_file($fileTmp, $destination)) {
            $message = "✅ Upload successful!";
        } else {
            $message = "❌ Upload failed!";
        }
    }

} else {
    $message = "";
}
?>

<!DOCTYPE html>
<html>
<body style="
    font-family:sans-serif; 
    text-align:center; 
    margin-top:100px; 
    background-color:#f0f4f8;
">

<form method="POST" enctype="multipart/form-data" 
      style="
        border:1px solid #ccc; 
        padding:25px; 
        display:inline-block; 
        border-radius:12px;
        background-color:#ffffff;
        box-shadow:0 2px 10px rgba(0,0,0,0.1);
      ">
    
    <input type="file" name="file" required 
           style="padding:5px;">
    <br><br>
    <button type="submit" name="submit"
            style="
                padding:8px 15px;
                border:none;
                border-radius:6px;
                background-color:#4CAF50;
                color:white;
                cursor:pointer;
            ">
        Upload
    </button>

</form>

<br><br>

<?php 
echo "<div style='font-size:16px;'>$message</div>";

if($newName != "") {
    echo "<div style='margin-top:15px; background:#fff; display:inline-block; padding:15px; border-radius:8px; border:1px solid #ddd;'>
            <b>Original:</b> $originalName <br>
            <b>Saved as:</b> $newName
          </div>";
}
?>

</body>
</html>