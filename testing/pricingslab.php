<?php session_start();
if(isset($_POST['sessiondestroy'])){
    session_unset();
session_destroy();echo '<script>alert("session destroy")</script>';
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
.error {color: #FF0000;}
.row{
            margin-top: 20px;
        }
.container{
    justify-content: center;
    margin-top: 14%;
}
h1{text-align:center;}
table,tr,th,td{
    border:2px solid black;
    text-align: center;
}
th, td {
  padding: 15px;
}
.error {
    color: red;
    display: none;
}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>pricing Slab</h1>
            <div class="col-6">
            <form class="form-group" method="post" >
                <div class="form-group mb-10">
                    <label class="form-check-label">Course Name</label>
                    <select name="course"  class="form-control-sm">
                        <option value="">pls select any</option>
                        <option value="BCA">BCA</option>
                        <option value="BTECH">BTECH</option>
                        <option value="BCOM">BCOM</option>
                        <option value="BBA">BBA</option>
                    </select>
                    <span class="error" id="courseErr">*</span>
                    <small class="error has-error-course-name"></small>
                </div>
                
               <div class="form-group mt-10">
                    <label class="form-check-label">Days</label>
                    <select name="days" class="form-control-sm" id="days">
                        <option value="">pls select any</option>
                        <option value="3years">3years</option>
                        <option value="4years">4years</option>
                        <option value="3years">3years</option>
                        <option value="3years">3years</option>
                    </select>
                    <span class="error" id="daysErr">*</span>
                    <small class="error has-error-days"></small>
               </div>
        
                <div class="form-group mb-10">
                    <label class="form-check-label">Fees</label>
                    <select name="fees" class="form-control-sm" id="fees">
                        <option value="">pls select any</option>
                        <option value="1000">1000</option>
                        <option value="2000">2000</option>
                        <option value="500">500</option>
                        <option value="400">400</option>
                    </select>
                    <span class="error" id="feesErr">*</span>
                    <small class="error has-error-fees"></small>
                </div>
                
               
            </form>
            <button type="submit" class="btn btn-primary" id="submit" name="button1">submit</button>
            <button class="btn btn-danger" type="submit" name="sessiondestroy">destroy</button>
            </div>
            <div id="html"></div>
        </div>
    </div>
    <!-- click on button -->
    <script src="jquery/jquery.min.js"></script>
    <script>
         count=1;
    $(document).ready(function(){
           $("#submit").click(function(){           
                $.ajax({
                        type: 'post',
                        url: 'sessiontable.php',
                        data: $("form").serialize(),
                        success: function(result){
                            console.log(result);
                           var data = result;
                            var data = JSON.parse(result);
                            console.log(data);
                            if(data.has_error_days != '' || data.has_error_days != NULL) {
                                $('.has-error-days').show().text(data.has_error_days)
                            } 
                            if (data.has_error_fees != '' || data.has_error_fees != NULL) {
                                $('.has-error-fees').show().text(data.has_error_fees)
                            }

                            if (data.has_error_course_name != '' || data.has_error_course_name != NULL) {
                                $('.has-error-course-name').show().text(data.has_error_course_name)
                            }                           
                            else
                            {
                             second(data);
                            }
                            $('#html').html(data.html); 
                            
                        }
                       
                    });
                    function second(data){
                        // var tableheading='<table><tr><th>no</th><th>coursename</th><th>Days</th><th>fees</th></tr>';
                        //     $.each(data,function(key,value){
                        //         table+='<tr><td>'+data[key].value+'</td><td></td><td></td></tr>';
                        //     });
                        //     tableheading+=table;
                        //      var html=tableheading;
                        //         console.log("hihi");
                            
                        }
                    });
         });     
        
        </script>
        
       </body>
</html>