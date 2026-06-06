<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

include 'config/db.php';

if(isset($_POST['submit']))
{
    $user = $_SESSION['username'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    mysqli_query(
        $conn,
        "INSERT INTO tickets(username,subject,message)
         VALUES('$user','$subject','$message')"
    );

    echo "<p>Ticket Submitted</p>";
}

?>

<h2>Create Support Ticket</h2>

<form method="POST">

Subject:<br>
<input type="text" name="subject">

<br><br>

Message:<br>
<textarea name="message"></textarea>

<br><br>

<input type="submit" name="submit" value="Submit">

</form>
