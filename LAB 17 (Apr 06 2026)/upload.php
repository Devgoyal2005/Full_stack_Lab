<!DOCTYPE html>
<html>
    <head>
        <style>
            h3{
                color:red;
            }
            h4{
                color:green;
            }
        </style>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            Upload the file:<br>
            <input type="file" name="file"><br><br>
            <input type = "submit" value="submit" name="up">
        </form>
        <?php
        if(isset($_POST['up']))
            {
                $folder="uploads/";
                if(!is_dir($folder))
                    {
                        mkdir($folder, 0777, true);
                    }
                $name = $_FILES['file']['name'];
                $size = $_FILES['file']['size'];
                $error = $_FILES['file']['error'];
                $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
                $allowed=['pdf','docs'];
                if(!in_array($ext, $allowed))
                    {
                        echo"<h3>1. Invalid File extension</h3><br>";
                    }
                    else
                        {
                            echo"<h4>1. Valid File extension</h4><br>";
                        }
                if($size>2000000)
                    {
                        echo"<h3>2. Invalid File size</h3><br>";
                    }
                    else
                        {
                            echo"<h4>2. Valid File size</h4><br>";
                        }
                if($error)
                    {
                        echo"<h3>3. File upload failed</h3><br>";
                    }
                    else
                        {
                            echo"<h4>3. File upload Successfull</h4><br>";
                        }
            }
        ?>
    </body>
</html>