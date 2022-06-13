<?php   
if(isset($_POST["update"]))
       $id = $_POST['id'];
       $countryname = $_POST['country'];
               
        include "classes/countryclass.php";
        $obj1= new countryclass;
$obj1->updateCountry($id,$countryname);
header("location:viewcountry.php");

?>