<?php 
if(isset($_POST['submit']))
{   
    $folder=$_POST['folder'];
    echo $folder;
    
if(is_dir("uplodimages/$folder")) {
  echo ("$folder is a existing directory");
} else {
    mkdir("uplodimages/$folder");
}
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
       
        $countarray=count($_FILES['fileupload']['name']);
        
        for($i=0;$i<$countarray;$i++)
        {
            $abc=$_FILES['fileupload']['name'][$i];    
            echo "OLD NAME ". $abc;                    
            if(file_exists("uplodimages/jpg/".$abc||"uplodimages/png/".$abc||"uplodimages/jpeg/".$abc))
            {   
                $abc = rand(99,999).$abc;
                $ext = pathinfo($abc, PATHINFO_EXTENSION);
                if ($ext == 'jpg') {
                    move_uploaded_file($_FILES['fileupload']['tmp_name'][$i],"uplodimages/jpg/".$abc);
                    
                   echo "iamge uploaded";
                }elseif($ext=="png"){
                    move_uploaded_file($_FILES['fileupload']['tmp_name'][$i],"uplodimages/png/".$abc);
                    echo "iamge uploaded";
                }else{move_uploaded_file($_FILES['fileupload']['tmp_name'][$i],"uplodimages/jpeg/".$abc);
                    echo "iamge uploaded";}
            //     $char="abcABC";
            //     $strlen=3;
            //     rand();
            //  echo"file exist";
            }else{
        
          
                $ext = pathinfo($abc, PATHINFO_EXTENSION);
            
                if ($ext == 'jpg') {
                    move_uploaded_file($_FILES['fileupload']['tmp_name'][$i],"uplodimages/jpg/".$abc);
                    
                   echo "iamge uploaded";
                }elseif($ext=="png"){
                    move_uploaded_file($_FILES['fileupload']['tmp_name'][$i],"uplodimages/png/".$abc);
                    echo "iamge uploaded";
                }elseif($ext=="jpeg"){
                    move_uploaded_file($_FILES['fileupload']['tmp_name'][$i],"uplodimages/jpeg/".$abc);
                    echo "iamge uploaded";
                }
                else{
                    echo "something wrong!";
                }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<?php include "css/style.css" ?>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-6">
            <h1>FORM-REGISTER</h1>
            <form class="form-group" method="post" enctype="multipart/form-data">
                
                    <div class="row">

                        <div class="col">
                    <label  class="form-label">username</label>
                    <input type="text" class="form-control" id="name" name="username">
                    </div>

                    
                    <label  class="form-label">fileupload</label>
                    <input type="file"  id="fileupload" name="fileupload[]"  multiple>

                    <div class="col">
                        <label class="form-label">folder</label>
                        <input type="text" name="folder" class="form-control" >
                    </div>
                </div>
                
                
                <button class="btn btn-primary" type="submit" name="submit">submit_data</button>
                
            </form>
        </div>
        </div>
    </div>
</body>
</html>