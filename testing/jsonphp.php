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
echo "jsonobject";
$arr=["name"=>"raj","class"=>"12th","designation"=>"php develper"];
    $arr1=json_encode($arr);
    $arr2=json_decode($arr1, true);
    echo"<pre>";
    print_r($arr1) ;
    echo"</pre>";
    echo"<pre>";
    print_r($arr2) ;
    echo"</pre>";
    //echo $arr2->designation."<br>";
// function abc($item){
//     return $item;
// }
// $a=["apple","banana","orange","kiwi"];
// $abc=array_map("abc",$a);
// print_r($abc);
// try{ 
//     $x=7;
//     if($x>0){
//         throw new Exception("hello world!");
//     } 
// }
//    catch(Exception $a){ 
//        echo $a->getMessage();
// }
?>  
</body>
</html>
<php

