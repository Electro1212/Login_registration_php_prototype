<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:details.php");
    die();
}

$conn = mysqli_connect('localhost','root','','session_1');

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `Email`='$email' AND `Password`='$password'";
    $query = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($query);
    if($count>0){
        $row = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $row['Id'];
        $_SESSION['email'] = $row['Email'];
        $_SESSION['password'] = $row['Password'];
        header("Location:details.php");        
    }
    else{
        echo'id not found';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="post">      
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" id="" placeholder="Password">
        <input type="submit" name="login" value="Login"><br>
        <a href="register.php">register</a>
     </form>
</body>
</html>