<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

include 'config/db.php';

$message = "";

if(isset($_POST['upload']))
{
    $target_dir = "uploads/";

    $filename = basename($_FILES["file"]["name"]);

    $target_file = $target_dir . $filename;

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
    {
        $user = $_SESSION['username'];

        mysqli_query(
            $conn,
            "INSERT INTO uploads(username,filename)
             VALUES('$user','$filename')"
        );

        $message = "File uploaded successfully";
    }
}

?>

<h2>Document Upload</h2>

<?php echo $message; ?>

<form method="POST" enctype="multipart/form-data">

<input type="file" name="file">

<br><br>

<input type="submit" name="upload" value="Upload">

</form>
