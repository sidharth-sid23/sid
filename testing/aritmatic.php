<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="number" id="number" value="">
    <button type="submit">click-it</button>
    <?php 
     $per=77;
     if($per>=80 && $per<=100)
     {
        echo"exellent";
     }elseif($per>=60 && $per<=80){
        echo"very good";
     }elseif($per>=45 && $per<=60){
        echo"good";
     }elseif($per>=33 && $per<=45){
        echo"do hard work";
    }elseif($per<33){
        echo"fail !!!!!";
    }else{
        echo"pls enter the valdi percentage";
    }
    switch($per)
    {
        case($per>=80 && $per<=100):
            echo"exellent";
            break;
            case($per>=60 && $per<=80):
                
                echo"very g00d";
                break;
                case($per>=45 && $per<=60):
                    echo"good";
                    break;
                    case($per>=33 && $per<=45):
                        echo"do hard work";
                        break;
                        case($per<33):
                            echo"do hard work";
                            break;
                            default:
                            echo"invalid";
                        

    }
    
    
    ?>
</body>
</html>