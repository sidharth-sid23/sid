<?php 
include "classes/countryclass.php";
    if($_SERVER['REQUEST_METHOD'] =='POST')
    {
        
        $country_id=$_POST["country_id"];
        $state_id=$_POST["state_id"];
        $city_id=$_POST["city_id"];
        
             $country_id;
          $state_id;
         $city_id;
          
        $obj1= new countryclass;
       // $obj1->getsortArea($country_id,$state_id,$city_id);
        
         $sql=$obj1->getsortArea($country_id,$state_id,$city_id); 
        while($row=mysqli_fetch_array($sql))
        {
        ?> 
        <tr>
        <td><?php echo $row['Countryid'];?></td>
        <td><?php echo $row['Stateid'];?></td>
        <td><?php echo $row['Cityid'];?></td>
        <td><?php echo   $row['AreaName'];?></td>
        <td><a type="submit" class="button green" href="editarea.php?id=<?php echo $row["Areaid"]; ?>">edit</a>
        <a type="submit" class="button red" href="deletearea.php?id=<?php echo $row["Areaid"]; ?>">delete</a></td>
      </tr>
       
        <?php  } 
       
    }

?>