<?php 
    class userdata{
      
        public $_SESSION;

        function __construct()
        {
            session_start();
        }
        public function register_form(){
           $_POST;
           $returnArray=[];
        //    print_r($_POST);
           if (empty($_POST["name"])) {
            $returnArray["error_name"] = "name is required";
           } 
           if (empty($_POST["email"])) {
            $returnArray["error_email"] = "Email is required";
           }
           if (empty($_POST["password"])) {
            $returnArray["error_password"] = "password is required";
           }
           if (empty($_POST["confirmpassword"])) {
            $returnArray["error_confirmpassword"] = "Confirmpassword is required";
           }
           else{
            if(isset($_SESSION['storedata']) && in_array($_POST ,$_SESSION['storedata']))
            {
                echo'existing user';
            }else{
                $_SESSION["storedata"][]=$_POST;
                 echo json_encode($_SESSION["storedata"]);
            }
            }
            if(count($returnArray) > 0) {
                echo json_encode($returnArray);
                }
        }

    }

?>