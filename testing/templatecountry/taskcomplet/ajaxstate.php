<?php 
include "classes/countryclass.php";
    if($_SERVER['REQUEST_METHOD'] =='POST')
    {
        
        $country_id=$_POST["country_id"];
        $statename=$_POST["statename"];
        
        $obj= new countryclass;
        $obj->insertState($country_id,$statename);
        
        
       
    }

?>