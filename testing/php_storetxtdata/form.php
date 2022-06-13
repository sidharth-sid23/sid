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
    <?php include "css/style.css" ?>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-6">
            <h1>FORM-REGISTER</h1>
            <form class="form-group" method="post" action="">
                
                    <div class="row">
                    <div class="col">
                <label  class="form-label">username</label>
                <input type="text" class="form-control" id="name" name="username">
                </div>

                <div class="col">
                <label  class="form-label">password</label>
                <input type="password" class="form-control" id="password" name="password">
                </div>

                </div>
                <div class="row">
                <div class="col">
                <label  class="form-label">phone</label>
                <input type="number" class="form-control" id="phone" name="phone">
    
                </div>
                <div class="col">
                <label  class="form-label">city</label>
                <input type="text" class="form-control" id="city" name="city">
                </div>
                </div>
                <button class="btn btn-primary" type="submit" name="submit">submit_data</button>
                
            </form>
        </div>
        </div>
    </div>
<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
  
    $arr=["username" =>$username,"password" =>$password,"phone" =>$phone,"city" =>$city];

   $file= fopen("data.txt","a+");
   fwrite($file,print_r($arr,true));
   
    fclose($file);
}
 ?>
</body>
</html>