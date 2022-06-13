<?php   
    include "classes/connection.php";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {   
        $obj= new connection;
        $obj->insertfileinfolder();
   
    }



?>