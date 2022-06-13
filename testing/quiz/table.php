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
       <form method="post" action="table.php">
        <h1><center>table print</center></h1>
        <input type="text" id="first"><br>
        <input type="text" id="lastinput">
        <br>
        <button class="btn btn-primary" type="button" id="submit" name="submit" onclick="loop()">button</button>
        </form>
       
    </body>
    <script> 
    
        
    // var button = document.getElementById('submit');
    //     button.addEventListener('click',function(event){
    //         event.preventDefault();
            // var x =document.getElementById("first").value;
            // console.log(x);
        
    //var y=document.getElementById("lastinput").value;
    $(document).ready(function(){
        $("#submit").click(function(){

       
    var x = document.getElementById("first").value;   
            var y = document.getElementById("lastinput").value;  
    var i = 1;
    var x = 5;
        var result = "";
        function loop(x,y){
            // var x = document.getElementById("first").value;   
            // var y = document.getElementById("lastinput").value;    
           
                               if(i <= 10)
                               {   
                                  hello(x);
                               
                                    i++;
                               loop(); 
                               
                               }
                               else{console.log("Helloworld");}
                           }
                           function hello()
                            {
                                 document.write(x + "*" + i + "=" + x * i);
                                 document.write("<br>");
                         
                            }
                            
                        // });
                    });
    });
            

        
</script>
    <!-- <?php 
    // <p id="demo"></p>
    // <form>
    //     <input type="text" id="number">
    //     <input type="submit" id="submit" value="submit">
    // </form>
    // <script>
    //     var input = document.getElementById('number');
        
    //     var para = document.getElementById('demo');
       
    //     para.innerHTML = input.value;
    //     });
    // </script>
    // </body>
    // </html>
        //  $i=1;
        //  $result="";
        //     if(isset($_POST["submit"]))
        //     { 
        //                     $f=$_POST["firstinput"];
        //                     $l=$_POST["lastinput"];
        //                     echo $f;
        //                     echo $l;
        //                    function loop($i,$l){
                               
        //                             if($i < $l)
        //                             {   
        //                                 hello();
        //                                 $i++;
        //                             loop();
        //                             echo "hello";
        //                             }
        //                         }
        //                     function hello()
        //                     {
        //                     $result= $f * $i;
                        
        //                     echo $result;
        //                     }
                          
                    
        //  }
   
    // <?php 
    //      $i=1;
    //      $result="";
    //         if(isset($_POST["submit"]))
    //         { 
    //                         $f=$_POST["firstinput"];
    //                         $l=$_POST["lastinput"];
    //                         echo $f;
    //                         echo $l;
    //                        function loop($i,$l){
                               
    //                                 if($i < $l)
    //                                 {   
    //                                     hello();
    //                                     $i++;
    //                                 loop();
    //                                 echo "hello";
    //                                 }
    //                             }
    //                         function hello()
    //                         {
    //                         $result= $f * $i;
                        
    //                         echo $result;
    //                         }
                          
                    
    //      }
    //     ?>-->
         </body>
</html>