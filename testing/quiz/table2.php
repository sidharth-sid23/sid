<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="jquery.min.js"></script>
</head>
<body>

       <!-- second -->
       <form method="post" action="">
        <h1><center>table print</center></h1>
        <input type="text" id="first" name="f"><br>
        <input type="text" id="lastinput" name="l">
        <br>
        <button class="btn btn-primary" type="submit" id="submit4" name="submit">button</button>
        </form>
    </body>
<?php 
    if(isset($_POST["submit"]))
    {       
        $i=1;
        $f=$_POST["f"];
         $l=$_POST["l"]."<br>";
        function loop($l,$f){
            global $i;
            if($i <= $l)
            {   
                echo ($f."*".$i."=".$f*$i)."<br>";
            
                $i++;
                loop($l,$f);
            }
        }
        loop($l,$f);     
    }
?>
</html>