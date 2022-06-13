<?php 
include "classes/countryclass.php";
    if($_SERVER['REQUEST_METHOD'] =='POST')
    {
        
        $country_id=$_POST["country_id"];
        $state_id=$_POST["state_id"];
        $cityname=$_POST["cityname"];
        echo $country_id;
        echo $state_id;
         echo $cityname;
        $obj= new countryclass;
        $obj->insertCity($country_id,$state_id,$cityname);
        
        
       
    }

?>