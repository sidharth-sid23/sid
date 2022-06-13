<?php 
    // $ftrp=fopen("file.html","r");
    // // echo $ftrp;
    //  if(!$ftrp){
    //      die("unable to show data");
    //  }
    //  $b=fgets($ftrp);
    //  echo $b;
     
     
    //  while($a=fgetc($ftrp))
    //  {
    //      echo $a;
    //      if($a==","){
    //          break;
    //      }
    //  }
     
    // //  $cnt= fread($ftrp,filesize("file.html"));
     
    //  fclose($ftrp);
    //  echo $cnt;
    if(isset($_POST["submit"]))
    {
     if(isset($_FILES["image"]))
     {
         echo"<pre>";
         print_r($_FILES);
         echo"</pre>";
        $file_name=$_FILES['image']['name'];
        $file_type=$_FILES['image']['type'];
        $file_tmp=$_FILES['image']['tmp_name'];
        $file_size=$_FILES['image']['size'];
      if( move_uploaded_file($file_tmp,"imgupload/".$file_name)){
          echo"img uploaded";
      } 
      else{
          echo"something wrong";
      }
     }
    }
    // $file="files.txt";
    // if(file_exists($file)){
    //     echo readfile("files.txt")."<br>";
    //     echo filesize("files.txt")."<br>";
    //     echo filetype("files.txt")."<br>";
    //     copy($file,"filecheck.txt");
    //     rename("filecheck.txt","checkfile.txt");
    //     dirname(realpath("files.txt",2));
    //     if(file_exists('folders')){
    //     rmdir("folders");
    //     }
    //     else{
    //         echo"file is already exist";
    //     }
    // }
    // else{
    //     echo"file does not exist";
    // }
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
    table{
        border:1px solid black;
    }
    form{
        margin-top:7%;
    }
    button{
        margin-top:7%;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
            <form class="form-group" method="post" enctype="multipart/form-data">
                <input type="file" name="image"><br>
                <button class="btn btn-primary" name="submit">submit</button>
            </form>   
        </div>
    </div>
</body>
</html>