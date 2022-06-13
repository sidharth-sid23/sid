<?php 
include "logindata.php";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{       
        $obj= new login;  
         $obj-> login_check();
}
else{ 



        
}?>