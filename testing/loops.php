<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
    //  $x=7;
    //  $y=1;
    //  $total=0;
    // while($y<=10){
    //  $total = $x *$y."<br>";
    //     echo "$x X $y=".$total;
    //  $y++;
    //  }
    //  for($y=1;$y<=10;$y++)
    //  {
    //      if($y==7){
    //          continue;
    //      }
    //     $total = $x *$y."<br>";
    //     echo "$x X $y=".$total;
    //  }
    //  for($y=1;$y<=10;$y++)
    //  {
    //      if($y==7){
    //          break;
    //      }
    //     $total = $x *$y."<br>";
    //     echo "$x X $y=".$total;
    //  }
   
    $name=$_GET['fname'];
    $password=$_GET['password'];
    $address=$_GET['address'];
    echo "hi my name is".$name."i am study in ".$password."and address is ".$address;

//      $name = $_GET['fname'];
//     // echo $name."<br>";
//      $password = $_GET['password'];
//      //echo $password."<br>";
//      $address = $_GET['address'];
//      //echo $address."<br>";
//   if ($name==NULL || $password==NULL || $address==NULL ) {
//     echo " empty";
// }
//    else {
//     echo "name is".$name ."<br> password is ".$password."<br> address is".$address;
//   }
    ?>
</body>
</html>