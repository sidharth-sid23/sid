<?php  
include "connection.php";
 $FirstName="";
 $lastName="";
 $Address="";
 $City="";
        if($_SERVER['REQUEST_METHOD'] =='POST'){
            // print_r($_POST);
            $FirstName=$_POST["firstName"];
            $lastName=$_POST["LastName"];
            $Address=$_POST["Address"];
            $City=$_POST["City"];
            // $Job=$_POST["JobProfile"];
            // $Exp=$_POST["Experience"];
            // $salary=$_POST["Salarypackage"];
            //echo $FirstName."<br>".$lastName."<br>".$Address."<br>".$City;
            $ins="INSERT INTO personal (firstName,lastName,Address,City)
            VALUES ('$FirstName','$lastName','$Address','$City')";
            $qry=mysqli_query($conn,$ins);
            if($qry){
                echo "inserted data";
            }
            else{
                echo "something wrong!!";
            }
            $sel="SELECT * FROM personal";
            $selqry=mysqli_query($conn,$sel);
            while($row=mysqli_fetch_assoc($selqry))
            {
               $fname= $row["firstName"];
                $lname=$row["lastName"];
                $Address= $row["Address"];
                $City=$row["City"];
                echo '<tr>
                <td>'.$fname.'</td>
                <td>'.$lname.'</td>
                <td>'.$Address.'</td>
                <td>'.$City.'</td>
                </tr>';
            }
         }
         else{
             echo"something wrong!!";
         }
?>