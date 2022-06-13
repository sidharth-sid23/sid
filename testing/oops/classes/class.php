<?php  
    class image{
        public $images;
        public $name;
        public $tmp_name;
        public function fileupload(){
                
            if(isset($_POST["click"]))
            {
               $this->images=$_FILES["img"];
              echo "<pre>";
              print_r($this);
              echo"</pre>";
              echo $this->name=$_FILES["img"]["name"];
                
               echo $this->tmp_name= $_FILES['img']["tmp_name"];
               if(move_uploaded_file($this->tmp_name,"img/".$this->name))
               {
                   echo"uploaded";
               }
               else{
                   echo"simething wrong";
               }
               
            }

        }

    }

?>