<?php 
     if(isset($_GET["id"])){
        $id = $_GET['id'];
        echo $id;
        
        include "classes/countryclass.php";
                $obj1= new countryclass;
        $obj1->deleteCity($id);
        header("location:viewcity.php");
            }
?>