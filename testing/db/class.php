<?php 
    class studentdata{
        public $localhost;
       public $password;
        public $username;
        public $db;
        public function __construct(){
            $this->conn=mysqli_connect($lh,$user,$pw,$db);
if(!$this->conn){ 
     die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully";
}
        }
    }

?>