<?php   
if(isset($_POST["update"]))
       $id = $_POST['id'];
       $cityname = $_POST['city'];
               echo $cityname,$id;
        include "classes/countryclass.php";
        $obj1= new countryclass;
$obj1->updateCity($id,$cityname);
header("location:viewcity.php");

?>