<?php   
if(isset($_POST["update"]))
       $id = $_POST['id'];
       $statename = $_POST['state'];
               
        include "classes/countryclass.php";
        $obj1= new countryclass;
$obj1->updateState($id,$statename);
header("location:viewstate.php");

?>