<?php 
include "../classes/studentdata.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $obj= new insertdata;
    $obj->insert();
}
//90+30,120+45

?>