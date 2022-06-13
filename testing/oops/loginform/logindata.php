<?php 
    class login{
      
        public $_SESSION;

        function __construct()
        {
            session_start();
        }
        public function login_check(){
                     if(isset($_SESSION["storedata"]) && in_array($_POST,$_SESSION["storedata"])){
                echo"ok";
            }
            else{
                echo "error";
            }
           
        } 
    
    } 
        
        ?>