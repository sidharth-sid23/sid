
<?php 
session_start();

$returnArray = [];

$courseErr="";
$daysErr="";
$feesErr="";
   
 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             if (empty($_POST["course"])) {
                 $returnArray['has_error_course_name'] = "Course is required";
                } 
                 else {
                    $course = ($_POST["course"]);
                        } 
            if (empty($_POST["days"])) {
                $returnArray['has_error_days'] = "days is required";
                } 
                else {
                    $days = ($_POST["days"]);
                }
            if (empty($_POST["fees"])) {
               $returnArray['has_error_fees'] = "fees is required";
                 }
               else{
                $days = ($_POST["days"]);
               }
            //    $_array=array($_POST["course"]=>$courseErr,$_POST["days"]=>$daysErr,$_POST["fees"]=>$feesErr);
            //    foreach($_array as $key=> $value){
            //         if($key==null)
            //         {
            //             echo $value;
            //         }
            //         else { echo "hihi";}
            //    }
        if($_POST["course"] && $_POST["fees"] && $_POST["days"]!==null)
        {
            // echo 'jasmk';
            $course=$_POST["course"];
            $days=$_POST["days"];
            $fees=$_POST["fees"];
            
            $_array=array('course'=>$course,'days'=>$days,'fees'=>$fees);
                        
            $_SESSION['array'][]=$_array;
            // echo json_encode($_SESSION['array']);
            // return $_SESSION['array'];
            $table = '<table>
                        <tr>
                           
                            <th>coursename</th>
                            <th>Days</th>
                            <th>fees</th>
                        </tr>';
            foreach($_array as $key => $value ){
                $table .= "<tr>".
                    "<td>".$value."</td>".
                    "<td>".$value."</td>".
                    "<td>".$value."</td>".
                "</tr>";
                }
            $returnArray['html'] = $table;
        }
// $_SESSION["array"]=[];
    }
    if(count($returnArray) > 0) {
        echo json_encode($returnArray);
        exit();
    }
    echo json_encode($returnArray);