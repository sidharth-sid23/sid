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
       abstract class car{
                public $name;
                public $arr;
                 abstract function execute($name);        
                
        }
        
        class bike extends car{
            public $modal;
           public function execute($modal){
                echo $this->modal=$modal."<br>";
            }
            function arayform(){
                $arr=array("Volvo", "BMW", "Toyota");
                //print_r($arr);
                $arrylenght=count($arr);
               for ($i=0;$i<$arrylenght;$i++)
               {
                   echo $arr[$i]."<br>";
               }
             }
        }
        
        $obj2=new bike();
        $obj2->execute("BMW");
       
        $obj2-> arayform();

     ?>
</body>
</html>