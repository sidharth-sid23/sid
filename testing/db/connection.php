<?php  


$lh="localhost";
$pw="";
$user="root";
$db="studentdata";
$conn=mysqli_connect($lh,$user,$pw,$db);
if(!$conn){ 
     die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully";
}

?>