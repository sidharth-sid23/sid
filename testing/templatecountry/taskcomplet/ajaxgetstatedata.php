<?php 


include "classes/countryclass.php";
    if($_SERVER['REQUEST_METHOD'] =='POST')
    {           
        $country_id=$_POST["country_id"];
       // echo $country_id;
        $obj= new countryclass;
        $sql= $obj->getdatastatebyid($country_id);
            
                 while($row=mysqli_fetch_array($sql))
                 {?>
                    <option value="<?php echo $row['Stateid'];?>"><?php echo $row['StateName'];?></option>
                         
                <?php }

    }

?>