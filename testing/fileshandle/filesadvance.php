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
    $file=fopen("files.txt","r");
   // echo  fread($file,filesize("files.txt"));
    // echo fgets($file);
    // echo ftell($file)."<br>";
    // echo fgets($file);
    // echo ftell($file);
    echo fgetc($file);
    ?>
</body>
</html>