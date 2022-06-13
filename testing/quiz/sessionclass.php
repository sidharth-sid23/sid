<?php 
session_start();
if(isset($_POST['destroy'])){
    session_unset();
session_destroy();
echo '<script>alert("session destroy")</script>';
header('location:quiz.php');
}
class quiz{    
    public $answer,$answer2,$anwser3,$total;
    public $_array;
    function execute(){
    if (isset($_POST["submit"]))
{
    $this->answer=$_POST["option1"];
    $this->answer2=$_POST["option2"];
    $this->answer3=$_POST["option3"]; 
    $this->_array=array('option1'=>$this->answer,'option2'=>$this->answer2,'option3'=>$this->answer3);
    // $_SESSION['array'][]=$_array;
    $this->total = 0;
            
            if ($this->answer == "Hypertext Preprocessor")
             { $this->total++; }
            if ($this->answer2 == "hypertextmarkuplanguage")
             { $this->total++; }
            if ($this->answer3 == "serverside") 
            { $this->total++; }
          
            if($this->total==3)
{
    echo "$this->total out of 3 ";
    echo "perfect "; 
         
    //     $-this->total = 3;

    // $percent = ($-this->total / 100) * $-this->total;
    //             echo $percent;
            }elseif($this->total==2)
            { echo "$-this->total out of 3";
                echo "moderate ";
            }
            else{
                echo "$-this->total out of 3 ";
                echo "practice";
            }
    echo "<pre>";
    print_r($_SESSION['array']);
    echo "</pre>";
    

}
}
}

   

 ?>