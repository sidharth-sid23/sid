<style>
tr,th,td{
    border:2px solid black;
    text-align: center;
}</style>
<?php 
session_start();
if(isset($_POST["destroy"]))
{
  session_unset();
  session_destroy();
}

if($_SERVER['REQUEST_METHOD']=="POST")
{ 
    $name=$_POST["name"];
       $age=$_POST["age"];
        $qualification=$_POST["qualification"];
        $hobbies=$_POST["hobbies"];
       $_array=array('name'=>$name,'age'=>$age,'qualification'=>$qualification,'hobbies'=>$hobbies);
       $_SESSION['abc'][]=$_array;
       
      
       $_SESSION['abc'];
       // echo "<pre>";
      // print_r( $_SESSION['abc']);
      //echo "</pre>";
    //   foreach($_SESSION['abc'] as $key=> $value ){
       
    //    echo $value["name"]."</br>";
    //    echo $value["age"]."</br>";
    //    echo $value["qualification"]."</br>";
    //    echo $value["hobbies"]."</br>";
    //    echo $value["address"]."</br>";
      // echo  $value["password"];
        
    //   }
    $i=0;
    $data="<table id=table><tr><th>id</th><th>name</th><th>age</th><th>qualification</th><th>hobbies</th><th>action</th></tr>";
     foreach($_SESSION['abc'] as $key=> $value ){
        $data .= "<tr>"."<td>".$key."</td>
        <td>".$value["name"]."</td>
        <td>".$value["age"]."</td>
       <td>".$value["qualification"]."</td>
       <td>".$value["hobbies"]."</td>
        <td>"."<button id=edit>edit"."</button>
        <button id=delete>delete"."</button>"."</td>
        </tr>";
       $i++;

     }
    //  print_r($data);
    //  $data.= "</table>";
    //  echo "</table>";
    //  print_r($data);
    echo $data;

  //    foreach($_SESSION['abc'] as $key=> $value ){
  //     $data .= "<tr>"."<td>".$key.
  //     "</td>".
  //     "<td>".$value["name"]."</td>".
  //     "<td>".$value["age"]."</td>".
  //     "<td>".$value["qualification"]."</td>".
  //     "<td>".$value["hobbies"]."</td>".
  //     "<td>".$value["address"]."</td>".
  //     "<td>".$value["city"]."</td>".
  //     "<td>"."<button id=edit>edit"."</button>".
  //     "<button id=delete>delete"."</button>"."</td>".
  //     "</tr>";
  //    $i++;

  //  }return $data;
  //  echo "</table>";
  // return $data;
  // echo json_encode($data);

    }
    
    ?>        

        
