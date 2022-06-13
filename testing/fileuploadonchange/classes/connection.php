<?php
    class connection{
      private  $lh="localhost";
      private    $us="root";
      private $pw="";
      private $db="countrydata";
      private  $conn;
            function __construct() {
            $this->conn=mysqli_connect($this->lh,$this->us,$this->pw,$this->db);
            if(!$this->conn)
            {
                echo" notconnected";
            }
            else {  
               echo"connected";
            }
          }
          function insertfileinfolder(){
            if(isset($_FILES["image"])){
                $file_name=$_FILES['image']['name'];
              
                $file_tmp=$_FILES['image']['tmp_name'];
            }
              if( move_uploaded_file($file_tmp,"images/".$file_name)){
                  echo"img uploaded";
                  echo $file_name;
              } 
              else{
                  echo"something wrong";
              }
            
          }

    }


?>