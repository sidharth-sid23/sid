<?php
session_start();
// print_r($_SESSION);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $_SESSION['arr'];
    for($i = 0 ; $i < count($_SESSION['arr']) ; $i++) {
        echo '<td>'.$_SESSION['arr'][$i].'</td>';}
    // echo "username:".$_SESSION["Fullname"]."<br>";
    // echo "email:".$_SESSION["email"]."<br>";
    // echo "password:".$_SESSION["password"]."<br>";
    // $arr=$_SESSION['arr'];
    // //array_push($_SESSION['arr'],$_POST['Fullname']);
    // echo implode(",  ",$arr);
    // echo "<br>";
    ?>
</body>
</html>