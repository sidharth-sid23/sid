<?php 


include "classes/countryclass.php";
    if($_SERVER['REQUEST_METHOD'] =='POST')
    {           
        $state_id=$_POST["state_id"];
       // echo $country_id;
        $obj= new countryclass;
        $sql= $obj->getdatacitybyid($state_id);?>
        <option value="">SELECT ANY CITY</option>
                <?php while($row=mysqli_fetch_array($sql))
                 {?>
                    <option value="<?php echo $row['Cityid'];?>"><?php echo $row['CityName'];?></option>
                         
                <?php }

    }

?>