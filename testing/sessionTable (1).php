<?php 
session_start();

$courseErr="";
$daysErr="";
$feesErr="";
$returnArray = [];
 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             if (empty($_POST["course"])) {
                 $returnArray["error_course"] = "Course is required";
                } 
                 else {
                    $course = ($_POST["course"]);
                        } 
            if (empty($_POST["days"])) {
                 $daysErr = "days is required";
                        $returnArray["error_days"]="days is required";
                } 
                else {
                    $days = ($_POST["days"]);
                }
            if (empty($_POST["fees"])) {
                 $feesErr = "fees is required";
                    $returnArray["error_fees"]="fees is required";
                 }
               else{
                $days = ($_POST["fees"]);
               }
            //    $_array=array($_POST["course"]=>$courseErr,$_POST["days"]=>$daysErr,$_POST["fees"]=>$feesErr);
            //    foreach($_array as $key=> $value){
            //         if($key==null)
            //         {
            //             echo $value;
            //         }
            //         else { echo "hihi";}
            //    }
            if($_POST["course"] && $_POST["fees"] && $_POST["days"]!==null){
                $course=$_POST["course"];
                $days=$_POST["days"];
                $fees=$_POST["fees"];
                
                $_array=array('course'=>$course,'days'=>$days,'fees'=>$fees);
                            
                $_SESSION['array'][]=$_array;
                echo json_encode($_SESSION['array']);
                
                // $i=0;
                // echo '<table><tr><th>no</th><th>coursename</th><th>Days</th><th>fees</th></tr>';
                // foreach($_SESSION['array'] as $key=> $value ){
                //     echo "<tr>"."<td>".$key."</td>".
                //     "<td>".$value["course"]."</td>".
                //     "<td>".$value["days"]."</td>".
                //     "<td>".$value["fees"]."</td>".
                    
                //     "</tr>";
                //    $i++;
                //  }
                
            
    }
// $_SESSION["array"]
                if(count($returnArray) > 0) {
                    echo json_encode($returnArray);
                    }
    }

?>