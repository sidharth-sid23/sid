<?php 

$name=$_GET['fname'];
    $password=$_GET['password'];
    $address=$_GET['address'];
    echo "hi my name is".$name."i am study in ".$password."and address is ".$address;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body{
            background-color:blanchedalmond;
        }
    div{
        margin-top:40px;
        margin-left:20px;
    }</style>
</head>
<body>
<!--<?php 




//     $cars = array("Volvo", "BMW", "Toyota");


//     $clength = count($cars);
//     sort($cars);
//     rsort($cars);
//     for($x = 0; $x < $clength; $x++) {
//       echo $cars[$x];
//       echo "<br>";
//     }
//     $age = array("Peter"=>"5", "Ben"=>"37", "Joe"=>"43");
// asort($age);
// ksort($age);
// asort($age);
// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
//   echo "<br>";
// }
     ?> -->
     <div class="container">
    <form action="<?php $_SERVER["PHP_SELF"];?>" method="get">
        name:<input type="text" name="fname" id="abc" value="" required><br>
        password:<input type="password" name="password" id="def" value=""required><br>
        address:<textarea type="text" name="address" id="ghi" value="" rows="4" required></textarea><br>
        <button type="submit" name="submit" class="btn btn-primary">click</button>
    </form>
    </div>
   
</body>
</html>