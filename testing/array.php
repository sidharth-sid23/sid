<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>

    </style>
</head>
<body>
    <?php
    function familyName($fname,$year) {
        echo "$fname Refsnes. Born in $year <br>";
      }
      
      familyName("Hege","1998");
      familyName("Stale","1978");
      familyName("Kai Jim","1983");
    $cars=array("audi","bmw","sclass");
    for($i=0;$i<count($cars);$i++)
    {
        echo "$cars[$i]"."<br>";
    }
    function function2(&$a,&$b)
    {
         return $a+$b;
    }
    $a=10;
    $b=7;
    $c=function2($a,$b);
    echo $c;
    //------------------------------------


    function first($num){
       return  $num+=7;
    }
    function second(&$num){
         $num+=4;
    }
    $number=10;
    first($number);
    echo"orginal value of $number is";
    second($number);
    echo"orginal value of $number is";
    $cars=array("audi","a8","bmw","7series","mercedes","sclass");
    
    for ($i=0;$i< count($cars);$i++){
        echo "cars are $cars[$i]";
    }
    ?>
</body>
</html>