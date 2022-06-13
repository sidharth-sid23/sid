<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <button type="submit" name="submit">click-it</button>
    </form>
    <?php
    function func($data){
        return $data."!?:|"."<br>";
    }
    function abc($data){
        return $data."!"."<br>";
    }
    function hello($str, $format) {
        //
        echo $format($str);
      }
     
        
          if(isset($_POST['submit'])){
            hello("Hello world", "func");
            hello("Hello world", "abc");
    }
    //  function myfunction1($arg){
    //     return strlen($arg);
    //  }
    //  if(isset($_POST['submit'])){
    //  $array=['apple','banana','orange'];
    //  $result=array_map("myfunction1",$array);
    //  print_r($result);}
     ?>
</body>
</html>