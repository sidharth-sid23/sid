<?php 

 $nameError="";
 $emailError="";
 $addressError="";
$gender="";
$hobbies="";
$genderError="";
$hobbiesError="";
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
 if (empty($_POST["gender"])) {
    $genderError = "Gender is required";
  } else {
    $gender = check($_POST["gender"]);
  }if (empty($_POST["hobbies"])) {
    $hobbiesError = "hobbies is required";
  } else {
    $hobbies = check($_POST["hobbies"]);
  }


//  if($_POST['gender']==NULL)
//  {
// $genderError="enter the gender";
//  }
//  if($_POST['hobbies']==NULL)
//  {
// $hobbiesError="enter the hobbies";
//  }
}
function check($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
if($name == null || $email == null || $address == null)
{
   header("location:formvalidation.php?name=name is required&email=email is required&address=address is required&gender=gender is required&&hobbies=hobbies is required");
}
else 
{
    echo $name."<br>";
    echo $email."<br>";
    echo $address."<br>";
    echo $gender."<br>";
    echo  $hobbies."<br>";
}
?>