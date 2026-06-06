<?php

session_start();
include 'config/db.php';

$message = "";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users
              WHERE username='$username'
              AND password='$password'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)==1)
    {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        header("Location: dashboard.php");
        exit();
    }
    else
    {
        $message = "Invalid Credentials";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Vulncoz Login</title>
</head>
<body>

<h2>Employee Login</h2>

<?php echo $message; ?>

<form method="POST">

Username:
<input type="text" name="username">

<br><br>

Password:
<input type="password" name="password">

<br><br>

<input type="submit" name="login" value="Login">

</form>

</body>
</html>
