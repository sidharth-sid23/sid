<?php
session_start();
if(isset($_POST['submit']))
{
    $_SESSION['arr']=array(); 
    $Fullname = $_POST['Fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    array_push($_SESSION['arr'],$Fullname,$email,$password);
    foreach($_SESSION['arr'] as $value) {
        echo '<td>'.$value.'</td>';
    
     
    }
    
echo "data is insert in session";
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<?php include_once "style.css" ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
            <form class="form-group" method="post" action="">
                            <div class="form group">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="Fullname" value="" class="form-control-md">
                               </div>
                            <div class="form-group">
                                <label class="form-label"> Email</label>
                                <input type="email" class="form-control-md"  name="email" value="" >
                                             </div>
                            <div class="form-group">
                                <label class="form-label"> Password</label>
                                <input type="password" class="form-control-md"  name="password" value="" >
                                </div>
                            <button class="btn btn-primary" name="submit" type="submit">click-it</button>
    </form>
            </div>
        </div>
    </div>
    
</body>
</html>
