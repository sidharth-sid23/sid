<?php 
class countryclass{
    public $id;
    protected $conn;
    protected $countryName;
    protected $slt;
    public function __construct(){
        $lh="localhost";
        $us="root";
        $pw="";
        $db="countrydata";
        $this->conn=mysqli_connect($lh,$us,$pw,$db);
        if(!$this->conn){
            echo" notconnected";
        }    
    }   
    function insertCountry(){
        $ins ="INSERT INTO country(CountryName)
        VALUES ('$_POST[country]')";
            $qry=mysqli_query($this->conn,$ins);
            if(!$qry){
                echo"not insert";
            }
            else{
                echo"inserted";
            }
    }  
    function insertState($country_id,$statename){   
        $ins ="INSERT INTO state(Countryid,StateName)
        VALUES ('$country_id','$statename')";
            $qry=mysqli_query($this->conn,$ins);
            if(!$qry){
                echo"not insert";
            }
            else{
                echo"inserted";
            }
    }
    function insertCity($country_id,$state_id,$cityname){
        $ins ="INSERT INTO city(Countryid,Stateid,CityName)
        VALUES ('$country_id','$state_id','$cityname')";
            $qry=mysqli_query($this->conn,$ins);
            if(!$qry){
                echo"not insert";
            }
            else{
                echo"inserted into city db";
            }
    }
    
    function insertarea($country_id,$state_id,$cityid,$areaname){
        $ins ="INSERT INTO area(Countryid,Stateid,Cityid,AreaName)
        VALUES ('$country_id','$state_id','$cityid','$areaname')";
            $qry=mysqli_query($this->conn,$ins);
            if(!$qry){
                echo"not insert";
            }
            else{
                echo"inserted";
            }
    }
         
        function updateCountry($id,$countryname){
             $this->update="UPDATE country SET CountryName = '$countryname' WHERE countryid ='$id' ";
             $qry=mysqli_query($this->conn,$this->update);
             if(!$qry){
                 echo"not update";
             }
             else{
                 return"updated";
             }
        }
        function updateState($id,$statename){
            $this->update="UPDATE state SET StateName = '$statename' WHERE stateid ='$id' ";
             $qry=mysqli_query($this->conn,$this->update);
             if(!$qry){
                 echo"not update";
             }
             else{
                 return"updated";
             }
        }
        function updateCity($id,$cityname){
            $this->update="UPDATE city SET CityName = '$cityname' WHERE Cityid ='$id' ";
             $qry=mysqli_query($this->conn,$this->update);
             if(!$qry){
                 echo"not update";
             }
             else{
                 return"updated";
             }
        }

        function getdata(){
              $this->slt="SELECT * FROM country"; 
              $this->result=mysqli_query($this->conn,$this->slt);
              return $this->result;
        }
         function getdatacitybyid($stateid){
                $this->slt="SELECT * FROM city WHERE Stateid='$stateid'  "; 
                $this->result=mysqli_query($this->conn,$this->slt);
                return $this->result;
            }
        function getdatastate(){
            $this->slt="SELECT country.CountryName,state.StateName,state.Stateid FROM state INNER JOIN country ON country.Countryid=state.Countryid  "; 
            $this->result=mysqli_query($this->conn,$this->slt);
            return $this->result;
        } 
      function getdatastatebyid($countryid){
            $this->slt="SELECT * FROM state WHERE Countryid='$countryid'  "; 
            $this->result=mysqli_query($this->conn,$this->slt);
            return $this->result;
        }
                //getarea
                
                function getdataArea()
                {
                    
                    $this->slt="SELECT country.CountryName,state.StateName,city.CityName,area.AreaName,area.Areaid FROM (( area INNER JOIN country ON area.Countryid =country.Countryid) INNER JOIN state ON area.Stateid=state.Stateid) INNER JOIN city ON area.Cityid=area.Cityid  "; 
                    $this->result=mysqli_query($this->conn,$this->slt);
                    return $this->result;
                }
             
               function getsortArea($country_id,$state_id,$city_id){
                   $this->sql = "SELECT * from area where Cityid = '$city_id' AND Countryid = '$country_id' AND Stateid = '$state_id'";
                   $this->result = mysqli_query($this->conn,$this->sql);

                   //$this-> slt="SELECT CityName FROM city WHERE Cityid='$city_id' && SELECT StateName FROM state WHERE Cityid='$state_id' && SELECT CountryName FROM state WHERE Countryid='$country_id'";
                    //$this->slt="SELECT country.CountryName,state.StateName,city.CityName,area.AreaName,area.Areaid FROM (( area INNER JOIN country ON area.Countryid =country.$country_id) INNER JOIN state ON area.$state_id=state.Stateid) INNER JOIN city ON area.$city_id=area.Cityid  "; 
                   // $this->result=mysqli_query($this->conn,$this->slt);
                    return $this->result;
                
            }
                
                
                //getcity
                function getdataCity(){
                    $this->slt="SELECT country.CountryName,state.StateName,city.CityName,city.Cityid FROM ( city INNER JOIN country ON city.Countryid =country.Countryid) INNER JOIN state ON city.Stateid=state.Stateid"; 
                    $this->result=mysqli_query($this->conn,$this->slt);
                    return $this->result;
            }

            //deletecity
            function deleteCountry($id){
                $this->delete="DELETE  FROM country WHERE countryid='$id' "; 
                $this->result=mysqli_query($this->conn,$this->delete);
                if($this->result){
                    return "deleted"; 
                }
                else{
                    echo "something wrong";
                }      
            }
            //deletestate
            function deleteState($id){
                $this->delete="DELETE  FROM state WHERE Stateid='$id' "; 
                 $this->result=mysqli_query($this->conn,$this->delete);
            if($this->result){
                return "deleted";
            }
            else{
                echo "something wrong";
            }
            }

            //deletcity
            function deleteCity($id){
                $this->delete="DELETE  FROM city WHERE Cityid='$id' "; 
            $this->result=mysqli_query($this->conn,$this->delete);
            if($this->result){
                return "deleted";
            }
            else{
                echo "something wrong";
            }
            }
            //deletearea
            function deletearea($id){
            $this->delete="DELETE  FROM area WHERE Areaid='$id' "; 
            $this->result=mysqli_query($this->conn,$this->delete);
            if($this->result){
                return "deleted";
            }
            else{
                echo "something wrong";
            }
            }
             public function  gettabledatabycid($id){
                $this->slt="SELECT * FROM state WHERE Countryid='$id'  "; 
                $this->result=mysqli_query($this->conn,$this->slt);
                return $this->result;
             }  




}
?>