<?php 
include "classes/countryclass.php";
    if($_SERVER['REQUEST_METHOD'] =='POST')
    {
        
        $country_id=$_POST["country_id"];
        $state_id=$_POST["state_id"];
        $city_id=$_POST["city_id"];
        $areaname=$_POST["areaname"];
         $country_id;
         $state_id;
         $city_id;
          $areaname;
        $obj= new countryclass;
        $obj->insertarea($country_id,$state_id,$city_id,$areaname);
        
        
       
    }

?>