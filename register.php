<?php
$conn = mysqli_connect('localhost','root','','session_1');

if(isset($_POST['register'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `users`(`Email`, `Password`) VALUES ('$email','$password')";
    mysqli_query($conn,$sql);
    header("Location:Index.php");
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
        <input type="submit" name="register" value="Register"><br>
        <a href="Index.php">login</a>
     </form>
</body>
</html>