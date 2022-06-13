<?php  
class studentdata{
    protected $connection;
    public $slt;
    function __construct(){
        echo "test";
        $lh="localhost";
        $pw="";
        $user="root";
        $db="studentdata";
        $this->connection = mysqli_connect($lh,$user,$pw,$db);
        if(!$this->connection){ 
            die("Connection failed: " . mysqli_connect_error());
        }
        else{
            echo "connected";
        }
    }
}

// child class
class insertdata extends studentdata{
                
    function insert(){
        $data = 'data';
        echo $data;
        $studentName=$_POST["Student_Name"];
        $class=$_POST["class"];
        $gender=$_POST["gender"];
        $marks=$_POST["marks"];
        echo $studentName,$class,$gender,$marks;
        $ins="INSERT INTO school(Student_Name,class,gender,marks)
        VALUES ('$studentName','$class','$gender','$marks')";
        $qry=mysqli_query($this->connection,$ins);
        if($qry){
            echo "inserted data";
        }
        else{
            echo "something wrong!!";
        }
    }
        function select(){
               $this->slt="SELECT * FROM school"; 
               
        }
        
}

        


?>