<?php
require "../classes/studentdata.php";
$obj = new insertdata;
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
<script src="jquery/jquery.min.js"></script>
<?php include_once "..//css/style.css" ?>
<script src="jquery/jquery.min.js"></script>
</head>
<body>
<div class="container">
   
   <div class="row">
   
       <div class="col-6">
           <h1>registration form</h1>
           <form class="form-group" id="form" method="post">
               <div class="form-group">
                   <label class="form-label">studentName</label>
                   <input type="text" class="form-control" name="Student_Name" placeholder="studentName" value="">
               </div>
               <div class="form-group">
                   <label class="form-label">class</label>
                   <input type="text" class="form-control" name="class" placeholder="class" value="">
               </div>
               <div class="form-group">
                   <label class="form-label">gender</label><br>
                   <label class="form-label">MALE</label>
                   <input type="radio" class="form-check-input" name="gender" placeholder="gender" value="male">
                   <label class="form-label">FEMALE</label>
                   <input type="radio" class="form-check-input" name="gender" placeholder="gender" value="female">
               </div>
               <div class="form-group">
                   <label class="form-label">marks</label>
                   <input type="text" class="form-control" name="marks" placeholder="marks" value="">
               </div>
              
               <button class="btn btn-primary" name="submit1" id="button" type="submit">
                   <b><i>Submit</i></b>
               </button>
           </form>
       </div>
   </div>
</div> 
<script>
    $(document).ready(function(){
        $("form").submit(function(){
            event.preventDefault();
            var formdata = $(this).serialize();
                console.log("hihi");
            $.ajax({
                        type:'post',
                        url:'ajax.php',
                        data:formdata,
                        success:function(result){
                         console.log(result);                        
                }
            });
        })
    });
</script>

</body>
</html>