<?php 
        if($REQUEST_METHOD=="GET")
        {
            $_GET["studentid"];
            $_GET["firstName"];
            $_GET["lastName"];
            $_GET["Address"];
            $_GET["City"];
           
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
<?php include_once "css/style.css" ?>
<style>
   table{ 
       border:"1" ;
          }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
    <form class="form-control">
    <table  cellpadding="5" >
        <tr>
        <th>studentid</th>
        <th>firstName</th>
        <th>lastName</th>
        <th>Address</th>
        <th>City</th>
        </tr>
        <tr>
            <td><?php $_GET["studentid"] ?></td>
            <td><?php $_GET["firstName"] ?></td>
            <td><?php $_GET["lastName"] ?></td>
            <td><?php $_GET["Address"] ?></td>
            <td><?php $_GET["City"] ?></td>
            
        </tr>
    </table>
    </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
        $lh="localhost";
        $us="root";
        $pw="";
        $db="studentdata";
        $conn=mysqli_connect($lh,$us,$pw,$db);
        if(!$conn){
            echo "error not connection";
        }
        else{
            echo"connection";
        }
       // $update="UPDATE personal SET $FirstName="$_GET["firstName"]", $lastName="$_GET["lastName"]", $Address="$_GET["Address"]", $City="$_GET["City"]"";


?>