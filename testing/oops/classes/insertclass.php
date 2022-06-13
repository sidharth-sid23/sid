<?php 
class student{
    public $name,$email,$address,$file_type,$file_tmp,$file_size;
    public function execute()
        {
                $this->name=$_POST['Fullname'];
                $this->email=$_POST['email'];
                $this->address=$_POST['address'];
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