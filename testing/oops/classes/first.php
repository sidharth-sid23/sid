<?php 
class student
{
   public function fileupload(){
    if(isset($_FILES['image']))
    {   $this->file_name=$_FILES['image']['name'];
        $this->file_type=$_FILES['image']['type'];
        $this->file_tmp=$_FILES['image']['tmp_name'];
        $this->file_size=$_FILES['image']['size'];
        if( move_uploaded_file($this->file_tmp,"../img/".$this->file_name)){
            echo"img uploaded"."<br>";
            echo $this->name."<br>". $this->email."<br>". $this->address;
        } 
        else{
            echo"something wrong";
        }
    }
   }
    
} 
?>