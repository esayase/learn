<?php
include("connect_local.php");
// include("connect_online.php");
session_start();
$is_a_user = false;
$is_correct = false;



if($connection){
// echo"<h1>this connected</h1>"; 
}
if(isset($_POST["submit"])){
        $username=$_POST['username'];
        $password=$_POST['password'];
$sql = "SELECT * FROM everyone where username = '$username'";
$result = mysqli_query($connection,$sql);

if(mysqli_num_rows($result)>0){
    $data = mysqli_fetch_assoc($result);
    if(password_verify($password,$data['password'])){
        $_SESSION["username"]=$username;
        $_SESSION["isloggedin"] = true;
        if($data["id"]==56){
            $_SESSION["is_admin"]=true;
        }
        header("location:../index.php");
        exit();
    }
    else{
        $is_correct = true;
    }
}
else{
    $is_a_user = true;
}


mysqli_close($connection);
        // if($username==$_POST['username'] && $password==$_POST['password']){
        //     $_SESSION['u']=$username;
        //     header("Location:ll.php");
        // }
        // else{
        //     echo "<script> alert('Incorrect username or password');";
        //     echo "window.location='index.html' </script>";
        // }


       # echo "<h1>Welcome: ". $_POST["usern"]."</h1>";
       # echo "<h1>Your password is :".$_POST["pass"]."</h1>";
    
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
            <h1>Login</h1>


        </div>
        <form action="login.php" method="post">
        <input type="text" name="username" id="un" placeholder="username">
        <input type="password" name="password" id="pw" placeholder="password">
        <input type="submit" value="Login" name="submit" id="loginbutton">
        </form>
            <?php if($is_correct):?>
            <p style="color:red"> Incorrect password!</p>
            <?php elseif($is_a_user):?>
            <p style="color:red"> User not registered! please sign up down below. </p>
            <?php endif;?>
        <p> not a member? </p><a href="signup.php"> sign up here</a>
        <a href="#" id="show-option">forgot password?</a>
        <p id="forgot-password" style="display:none;"> please contact the admins through telegram with https://t.me@daik151, https://t.me@mulukenasefateju </p>
    </div>
</body>
</html>