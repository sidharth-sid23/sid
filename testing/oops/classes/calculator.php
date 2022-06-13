<?php
require "claculatorclass.php";
$obj= new calculator;
if(isset($_POST["operation"])){
    $operation=$_POST["operation"];
    $input1=$_POST["input1"];
    $input2=$_POST["input2"];
    if(!empty($input1) && !empty($input2)){
        // get Result
        switch ($operation) {
            case "div":
                $result = $obj->divide($input1,$input2);
                $operator = ' / ';
            break;
            case "sub":
                $result =  $obj->subtract($input1,$input2);
                $operator = ' - ';
            break;
            case "mul":
                $result =  $obj->multiple($input1,$input2);
                $success =  $input1 . ' * ' .$input2 . ' = ' . $result;
                $operator = ' * ';
            break;

            default:
                $result =  $obj->add($input1,$input2);
                $operator = ' + ';
            break;
        }
        $success =  'Your Result is : ' . $input1 . $operator . $input2 . ' = ' . $result;
    }else{
        $error = 'Please fill required fields';
    }
    
}

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
    background-color:lightblue;}
</style>
</head>
<body>
        <div class="container mt-5">
            <div class="row">
                <div class="p-3 mb-2 bg-secondary text-white col-6">
                        <h1 class="text-center">CALCULATOR</h1>
                    <form class="form-group" method="post">
                        <div class="form-group">
                            <label class="form-label">input1</label>
                            <input type="text" class="form-control-md" name="input1">
                        </div>
                        <div class="form-group">
                            <label class="form-label">input2</label>
                            <input type="text" class="form-control-md" name="input2">
                        </div>
                        <p><?=$success ?? ''?></p>
                        <p><?=$error ?? ''?></p>
                        <button class="btn btn-primary mt-5" type="submit" name="operation" value="add">Add</button>
                        <button class="btn btn-primary mt-5" type="submit" name="operation" value="sub">Sub</button>
                        <button class="btn btn-primary mt-5" type="submit" name="operation" value="mul">Multiple</button>
                        <button class="btn btn-primary mt-5" type="submit" name="operation" value="div">Divide</button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>


               