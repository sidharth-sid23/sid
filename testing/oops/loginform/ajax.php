<?php 
include "class.php";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{       
        $obj= new userdata;  
         $obj-> register_form();
}
else{ 



        
}?>