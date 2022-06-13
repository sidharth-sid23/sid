<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>append</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
    div{
        margin-top:40px;
        margin-left:20px;
    }</style>
    <script src="jquery/jquery.min.js"></script>
</head>
<body>
    <div class="container">
    <!-- <input  id="input1" name="name">
    <input  id="input1" name="name">
    <input  id="input1" name="name"> -->
            <div class="row">
                <div class="col-4">
                    <form method="post" >
                    <label class="form-check-label">Course Name</label>
                <select name="course"  class="form-control-sm">
                    <option value="">pls select any</option>
                    <option value="BCA">BCA</option>
                    <option value="BTECH">BTECH</option>
                    <option value="BCOM">BCOM</option>
                    <option value="BBA">BBA</option>
                </select>
                <span class="error" id="courseErr">*</span>
                <!-- second  -->
                
                        <label class="form-label">Days</label>
                        <select name="days" class="form-control-sm" id="days">
                    <option value="">pls select any</option>
                    <option value="3years">3years</option>
                    <option value="4years">4years</option>
                    <option value="3years">3years</option>
                    <option value="3years">3years</option>
                </select>
                <span class="error" id="daysErr">*</span>
                
                        <label class="form-label">Fees</label>
                        <select name="fees" class="form-control-sm" id="fees">
                    <option value="">pls select any</option>
                    <option value="1000">1000</option>
                    <option value="2000">2000</option>
                    <option value="500">500</option>
                    <option value="400">400</option>
                </select>
                <span class="error"id="feesErr">*</span>
                    <button  type="button" id="button1">+</button>
                    <button  type="submit" id="submit" name="subnit">submit</button></div>
    
                   </form>
    
                <div class="col6" id="col6">
                
                </div></div>
            </div>
    </div>
    <script>
        count=1;
        $(document).ready(function(){
            $("#button1").click(function(){
                
                $(".col-4").first().clone().append("<button type=button class=button2>X</button>").appendTo(".row");
                //$(".col-6").last().clone().append('<button  type="submit" id="button2" name="subnit">subnit</button>');
            });
            $(document).on("click",".button2",function(){
                $(this).parent().remove();   
            }); 
            $("#submit").click(function(){
                // $.ajax({
                //     type: 'post',
                //         url: 'sessiontable2.php',
                //         data: $("form").serialize(),
                //         success: function(result){
                //             console.log(result);
                //         }
                // });
            }); 
        });
    </script>
</body>
</html>












