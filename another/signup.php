
<?php
session_start();
include("connect_local.php");
// include("connect_online.php");
if($connection){
// echo"<h1>this connected</h1>"; 
}
if(isset($_POST["submit"])){
        $username=$_POST['username'];
        $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
        $email=$_POST['email'];

            $subject = "You just signed up";
            $message = "Oh my god, Is this really working?";
            mail($email, $subject, $message);

$sql = "INSERT INTO everyone(username,password,email)
        VALUES ('$username','$password','$email')";
mysqli_query($connection,$sql);
mysqli_close($connection);
header("location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>

    <div class="login">
        <div class="heading">
            <h1>Sign up</h1>
        </div>
        <form action="signup.php" method="post">
        <input type="text" name="username" id="un" placeholder="username">
        <input type="password" name="password" id="pw" placeholder="password">
        <input type="email" name="email" id="em" placeholder="email">
        <input type="submit" value="Sign up" name="submit">
        </form>
        <p> Already a member? </p><a href="login.php"> Login here</a>
    </div>
</body>
</html>
