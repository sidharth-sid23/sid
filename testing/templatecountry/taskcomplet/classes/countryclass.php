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
        if(!$this->conn)
        {
            echo" notconnected";
        }
        
    }   
    function insertCountry(){
        $countryName =$_POST["country"];
        $ins ="INSERT INTO country(CountryName)
        VALUES ('$_POST[country]')";
            $qry=mysqli_query($this->conn,$ins);
            if(!$qry)
            {
                echo"not insert";
            }
            else{
                echo"inserted";
            }

    
    }  
        function deleteCountry($id){
           
            $this->delete="DELETE  FROM country WHERE countryid='$id' "; 
            $this->result=mysqli_query($this->conn,$this->delete);
            if($this->result)
            {
                return "deleted";
                
            }
            else{
                echo "something wrong";
            }
                
        }  
        function updateCountry($id,$countryname){
            echo $id;
            echo $countryname;
            $this->update="UPDATE country
             SET CountryName = '$countryname'
             WHERE countryid ='$id' ";
             $qry=mysqli_query($this->conn,$this->update);
             if(!$qry)
             {
                 echo"not update";
             }
             else{
                 return"updated";
             }

        }
        function updateState($id,$statename){
            echo $id;
            echo $statename;
            $this->update="UPDATE state
             SET StateName = '$statename'
             WHERE stateid ='$id' ";
             $qry=mysqli_query($this->conn,$this->update);
             if(!$qry)
             {
                 echo"not update";
             }
             else{
                 return"updated";
             }



        }
        function updateCity($id,$cityname){
            echo $id;
            echo $cityname;
            $this->update="UPDATE city
             SET CityName = '$cityname'
             WHERE Cityid ='$id' ";
             $qry=mysqli_query($this->conn,$this->update);
             if(!$qry)
             {
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
        function insertState($country_id,$statename){
           
            $ins ="INSERT INTO state(Countryid,StateName)
            VALUES ('$country_id','$statename')";
                $qry=mysqli_query($this->conn,$ins);
                if(!$qry)
                {
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
                if(!$qry)
                {
                    echo"not insert";
                }
                else{
                    echo"inserted into city db";
                }
    
        
        }
        function getdatastate(){
            $this->slt="SELECT * FROM state  "; 
            $this->result=mysqli_query($this->conn,$this->slt);
            return $this->result;
      } 
      function getdatastatebyid($countryid){
        $this->slt="SELECT * FROM state WHERE Countryid='$countryid'  "; 
        $this->result=mysqli_query($this->conn,$this->slt);
        return $this->result;
  }

                //getcity
                function getdataCity(){
                    $this->slt="SELECT * FROM city "; 
                    $this->result=mysqli_query($this->conn,$this->slt);
                    return $this->result;
            }


            //deletestate
            function deleteState($id)
            {
                $this->delete="DELETE  FROM state WHERE Stateid='$id' "; 
            $this->result=mysqli_query($this->conn,$this->delete);
            if($this->result)
            {
                return "deleted";
                
            }
            else{
                echo "something wrong";
            }
            }

            //deletcity
            function deleteCity($id)
            {
                $this->delete="DELETE  FROM city WHERE Cityid='$id' "; 
            $this->result=mysqli_query($this->conn,$this->delete);
            if($this->result)
            {
                return "deleted";
                
            }
            else{
                echo "something wrong";
            }
            }
}
?>