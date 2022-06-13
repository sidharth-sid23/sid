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
        <div class="container">
            <form  class="form-control" method="post">
            <input type="number" name="x"value="">
            <input type="number" name="y"value="">
            <input type="number" name="z"value="">
            <button type="submit" name="submit">click</button>
            </form>
        </div>
        <?php       
                    // $x=$_POST["x"];
                    //     $y=$_POST["y"];
                    //     $z=$_POST["z"];
                    //     echo $x+$y+$z;
            if(isset($_POST["submit"]))
            {       
                $total="";
                $x=$_POST["x"];
                if($x<100)
                {}
                $y=$_POST["y"];
                $z=$_POST["z"];
                $total=$x+$y+$z;
                if($total<=100)
                {
                    echo $total;
                }
                else{
                    echo("more than 100");
                }
            }
        ?>
</body>
</html>