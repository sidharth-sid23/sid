<?php
include "../classes/insertclass.php";
$obj= new student();
if(isset($_POST["submit"])){
$obj->execute();
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
<?php include_once "../css/style.css" ?> 
</head>
 <body>
 <div class="container">
        <div class="row">
            <div class="col-6">
            <form class="form-group" method="post" action=""enctype="multipart/form-data">
                            <div class="form group">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="Fullname" value="" class="form-control-md">
                            <span class="error">*<?php echo $_REQUEST['name'] ?? ''; ?></span>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Email</label>
                                <input type="email" class="form-control-md"  name="email" value="" >
                                <span class="error">*<?php echo $_GET['email'] ?? ''; ?></span>
                                        </div>
                            <div class="form-group">
                                <label class="form-label"> Address</label>
                                <textarea type="text" class="form-control-md"  name="address" value="" ></textarea>
                                <span class="error">*<?php echo $_GET['address'] ?? ''; ?></span>
                            </div>
                               <label  class="form-label">fileupload</label>
                                <input type="file"  id="fileupload" name="image"  multiple>
                                <br>
                            <button class="btn btn-primary" name="submit" type="submit">click-it</button>
 </body>
 </html>