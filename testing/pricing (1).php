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
.error{color:red}
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
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>pricing Slab</h1>
            <div class="col-12">
            <form class="form-group" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-check-label">Course <span class="error_course">*</span></label>
                            <select name="course"  class="form-control">
                                <option value="">pls select any</option>
                                <option value="BCA">BCA</option>
                                <option value="BTECH">BTECH</option>
                                <option value="BCOM">BCOM</option>
                                <option value="BBA">BBA</option>
                            </select>
                            
                        </div>  
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-check-label">Days <span class="error_days">*</span></label>
                            <select name="days" class="form-control" id="days">
                                <option value="">pls select any</option>
                                <option value="3years">3years</option>
                                <option value="4years">4years</option>
                                <option value="3years">3years</option>
                                <option value="3years">3years</option>
                            </select>
                            
                        </div>  
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-check-label">Fees <span class="error_fees">*</span></label>
                            <select name="fees" class="form-control" id="fees">
                                <option value="">pls select any</option>
                                <option value="1000">1000</option>
                                <option value="2000">2000</option>
                                <option value="500">500</option>
                                <option value="400">400</option>
                            </select>
                            
                        </div>  
                    </div>
                </div>
                
                
                
                <button type="submit" class="btn btn-primary" id="submit" name="button1">submit</button>
            <!-- <button type="button" class="btn btn-success" id="addmore" name="addmore">Addmore</button>     -->
            </form>
            
            <!-- <button class="btn btn-danger" type="submit" name="sessiondestroy">destroy</button> -->
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
               event.preventDefault();        
                $.ajax({
                        type: 'post',
                        url: 'sessionTable (1).php',
                        data: $("form").serialize(),
                        success: function(result){
                            console.log(result);
                            var data = result;
                            var data = JSON.parse(result);
                            console.log(data);
                           if(data.error_course !="" || data.error_course !=NULL)
                            { $('.error_course').show().text(data.error_course); }
                             if(data.error_days != "" || data.error_days !=NULL)
                            {
                                $('.error_days').show().text(data.error_days);
                            }
                            if(data.error_fees !="" || data.error_fees !=NULL){
                                $(".error_fees").show().text(data.error_fees);
                            }
                           
                            show_data(data);
                            //second(data);
                           
                        }
                       
                    });
                    function show_data(data)
                    { 
                        $.ajax({
                        type: 'post',
                        url: 'showtable.php',
                        data: {data},
                        success: function(result){
                            console.log(result);
                            $('#html').html(result); 
                        }
                        });
                    }
                //     function second(data){
                //           $i=0;
                // var html='<table><tr><th>coursename</th><th>Days</th><th>fees</th></tr>';
                //         for(var x=0;x<data.length;x++){
                //             html+="<tr>"+"<td>"+data[x].course+"</td>"+
                //                 "<td>"+data[x].days+"</td>"+"<td>"+data[x].fees+"</td>"+"</tr>";
                           
                //         } 
                //             html+="</table>";
              
                      
                //             $('#html').html(html); 
                //         }
                    });
                    $("#addmore").click(function(){
                        if(count<=5){
                    $("#html").append("<div>"+"<label class=form-check-label>Fees</label>"+"<select name=FEES class=form-control-sm id=FEES><option>pls select any</option><option value=1000>1000</option><option value=2000>2000</option><option value=500>500</option><option value=400>400</option>"+"</select>"+"<label class=form-check-label>COURSE</label>"+"<select name=course class=form-control-sm id=course><option>pls select any</option><option value=BCA>BCA</option><option value=BTECH>BTECH</option><option value=BCOM>BCOM</option><option value=BBA>BBA</option>"+"</select>"+"<label class=form-check-label>DAYS</label>"+"<select name=days class=form-control-sm id=days><option>pls select any</option><option value=3YEAR>3YEAR</option><option value=4YEAR>4YEAR</option><option value=3YEAR>3YEAR</option><option value=3YEAR>3YEAR</option>"+"</select>"+
                    "<button class=button2>-</button></div>"+"<br>");
                    }
                    else
                    {
                    alert("no more clicks!");
                    $("#button1").attr("disabled");
                    }
                     count++;
                    });
                    $(document).on("click",".button2",function(){
                // $(this).parent().remove(); 
             });   
         });     
        
        </script>
        
       </body>
</html>