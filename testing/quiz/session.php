<?php 
session_start();
if(isset($_POST['destroy'])){
    session_unset();
session_destroy();
echo '<script>alert("session destroy")</script>';
header('location:quiz.php');
}
if (isset($_POST["submit"]))
{
    $answer=$_POST["option1"];
    $answer2=$_POST["option2"];
    $answer3=$_POST["option3"]; 
    $_array=array('option1'=>$answer,'option2'=>$answer2,'option3'=>$answer3);
    $_SESSION['array'][]=$_array;
    $total = 0;
            
            if ($answer == "Hypertext Preprocessor")
             { $total++; }
            if ($answer2 == "hypertextmarkuplanguage")
             { $total++; }
            if ($answer3 == "serverside") 
            { $total++; }
            if($total==3)
            {
                echo "$total out of 3 ";
                echo "perfect ";      
    //     $Total = 3;

    // $percent = ($total / 100) * $Total;
    //             echo $percent;
            }elseif($total==2)
            { echo "$total out of 3";
                echo "moderate ";
            }
            else{
                echo "$total out of 3 ";
                echo "practice";
            }
    echo "<pre>";
    print_r($_SESSION['array']);
    echo "</pre>";
    

   
} 
 ?>





<!-- <?php
             $data1;
             $i=0;
                  function data($data1)
                {  global $i;
                    if($i<=3)
                    {
                       echo $data1[$i];
                        $i++;
                        data($data1);
                    }
                }
                   data($data1);?>-->
             