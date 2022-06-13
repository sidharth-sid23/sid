<?php
$nameErr="";
$emailErr="";
session_start();
if(isset($_POST['destroy'])){
    session_unset();
session_destroy();echo '<script>alert("session destroy")</script>';
}
if(isset($_POST['submit']))
{  
    if (empty($_POST["Fullname"]&&$_POST["email"]&&$_POST["password"] )) {
        $nameErr = "Name is required";
        $emailErr = "email is required";
        $passwordErr = "password is required";
         } else { 
              $Fullname = $_POST['Fullname']; 
              $email = $_POST['email']; 
              $password = $_POST['password'];
        $_array=array('Fullname'=>$Fullname,'email'=>$email,'password'=>$password);
                if(isset($_SESSION['arr']) && in_array($_array ,$_SESSION['arr'])){
                echo'<script>alert("existing user")</script>';
                }else{
                $_SESSION['arr'][]=$_array;
                echo "<pre>";
                print_r($_SESSION['arr']);
                echo "</pre>";
                
               $i=0;
               echo "<table><tr><th>id</th><th>name</th><th>email</th><th>password</th><th>action</th></tr>";
                foreach($_SESSION['arr'] as $key=> $value ){
                   echo "<tr>"."<td>".$key."</td>".
                   "<td>".$value["Fullname"]."</td>".
                   "<td>".$value["email"]."</td>".
                   "<td>".$value["password"]."</td>".
                   "<td>"."<button id=edit>edit"."</button>".
                   "<button id=delete>delete"."</button>"."</td>".
                   "</tr>";
                  $i++;
                }
               echo"</table>";
                }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
.error {color: #FF0000;}

.container{
    justify-content: center;
    margin-top: 14%;
}
h1{text-align:center;}
table,tr,th,td{
    border:2px solid black;
    text-align: center;
}
</style>
</head>
<?php include_once "style.css" ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
            <form class="form-group" method="post" action="">
                            <div class="form group">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="Fullname" value="" class="form-control-md" >
                            <span class="error">* <?php echo $nameErr ?? ''?></span>
                               </div>
                            <div class="form-group">
                                <label class="form-label"> Email</label>
                                <input type="email" class="form-control-md"  name="email" value=""  >
                                <span class="error">* <?php echo $emailErr ?? ''?></span>
                                             </div>
                            <div class="form-group">
                                <label class="form-label"> Password</label>
                                <input type="password" class="form-control-md"  name="password" value="" >
                                <span class="error">* <?php echo $passwordErr ?? ''?></span>
                                </div>
                            <button class="btn btn-primary" name="submit" type="submit">click-it</button>
                            <a href="sessiondestroy.php"><button class="btn btn-danger" name="destroy" type="submit">destroy</button></a>
    </form>
            </div>
        </div>
    </div>
      

