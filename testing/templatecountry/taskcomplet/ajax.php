<?php 
include "classes/countryclass.php";
    if($_SERVER['REQUEST_METHOD'] =='POST')
    {
        
        $obj= new countryclass;
        $obj->insertcountry();
        
        
       
    }

?>