<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<?php include_once "style.css" ?>
<div class="container-fluid">
        <div class="row">
        <div class="col-6">
        <h1>JSON CREATE</h1>
        <form class="form-group" method="post" action=""id="abc" >
                            <div class="form group" >
                            <label class="form-label"><i><b>Full Name</b></i></label>
                            <input type="text" name="Fullname" value="" class="form-control-md">
                            </div>
                            <div class="form group" id="inputname">
                            <label class="form-label"><i><b>userid</b></i></label>
                            <input type="text" name="inputname" value=""  class="form-control-md">
                            </div>
                            
                            <div class="form group" id="inputvalue1">
                            <label class="form-label"><i><b>key</b></i></label>
                            <input type="text" name="inputname1" value=""  class="form-control-sm">
                            <label class="form-label"><i><b>value </b></i></label>
                            <input type="text"  name="inputname2" value=""  class="form-control-sm">
                            <label class="form-label"><i><b>key</b></i></label>
                            <input type="text" name="inputname3" value=""  class="form-control-sm">
                            <label class="form-label"><i><b>value </b></i></label>
                            <input type="text"  name="inputname4" value=""  class="form-control-sm">
                            </div>
                            <button class="btn btn-primary" id="btn1" type="button" name="submit">add-value</button>
                            <button class="btn btn-secondary" id="btn2" type="button" name="submit">add-child</button>
                            <button class="btn btn-success" id="btn3" type="button" name="submit">add-more</button>
                            <button class="btn btn-dark" type="submit" id="submit" name="submit">submit</button>
                        </form>
                        <button class="btn btn-primary" type="button" download>download</button>
                        </div>
                    </div></div>            
</body>
<script src="jquery/jquery.min.js"></script>
<script src="jquery/js.js"></script>
<?php if(isset($_POST["submit"]))
{
    $fullname=$_POST['Fullname'];
    // $fullname."<br>";
    $inputname=$_POST['inputname'];
    // $inputname."<br>"; 
    $inputname1=$_POST['inputname1'];
    // $inputname1."<br>"; 
    $inputname2=$_POST['inputname2'];
    $inputname3=$_POST['inputname3'];
    $inputname4=$_POST['inputname4'];
    // $inputname2."<br>"; 
    // $a=[$inputname1=>$inputname2,$fullname=>$inputname];
    // print_r($a);
    //     $array=array();
    //    array_push($array,$fullname,$inputname); 
    //    echo "<pre>";
    //    print_r($array);
    //    echo "</pre>";  
    //    echo "<pre>";
    //    echo json_encode($array) ;  
    //    echo "</pre>";     
    
$data = [];
$data[$inputname] = [$inputname1=> $inputname2, $inputname3=>$inputname4];
echo "<pre>";
print_r($data);
$encode = json_encode($data);
print_r($encode);
echo "<br><br>";
include "download.php";

} ?>
</html>