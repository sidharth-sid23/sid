<?php
 $nameError="";
 $emailError="";
 $addressError="";

 $name="";
 $email="";
 $address="";

 if(isset($_POST["submit"])){
 if($_POST['Fullname']==NULL)
 { 
     
$nameError="enter the name";
 }
 else{
     $name=check($_POST['Fullname']);
     if(!preg_match("/^[a-zA-Z-']*$/",$name))
     {
         $nameError="only letter valid";
     }
 }
 if($_POST['email']==NULL)
 {
$emailError="enter the email";
 }
 else{
    $email=$_POST['email'];
 }
 

 if($_POST['address']==NULL)
 {
$addressError="enter the address";
 }
 else{
     $address=$_POST['address'];
 }



}
function check($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}


?>