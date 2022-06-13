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
<?php include_once "css/style.css" ?>
<style>
    table{
        border:2px;
        
    }
</style>
</head>
<body>
    <div class="container">
   
        <div class="row">
        
            <div class="col-6">
                <h1>studentregistration form</h1>
                <form class="form-group" id="form" method="post">
                    <div class="form-group">
                        <label class="form-label">firstName</label>
                        <input type="text" class="form-control" name="firstName" placeholder="FirstName" value="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">LastName</label>
                        <input type="text" class="form-control" name="LastName" placeholder="LastName" value="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <textarea type="text" class="form-control" name="Address" placeholder="Address" value=""></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="City" placeholder="City" value="">
                    </div>
                    <!-- <div class="form-group">
                        <label class="form-label">JobProfile</label>
                        <input type="text" class="form-control" name="JobProfile" placeholder="JobProfile" value="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Experience</label>
                        <input type="text" class="form-control" name="Experience" placeholder="Experience" value="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Salarypackage</label>
                        <input type="text" class="form-control" name="Salarypackage" placeholder="Salarypackage" value="">
                    </div> -->
                    <button class="btn btn-primary" name="submit1" id="button" type="submit">
                        <b><i>Submit</i></b>
                    </button>
                </form>
            </div>
        </div>
    </div>
            <div id="html"></div>
</body>
<script>
    $(document).ready(function(){
        $("form").submit(function(){
            event.preventDefault();
            var formdata = $(this).serialize();
                console.log("hihi");
            $.ajax({
                        type:'post',
                        url:'insert.php',
                        data:formdata,
                        success:function(result){
                         console.log(result);
                         $table="";
                         $table+='<table border="2px">'+result+'</table>';
                         $("#html").html(result);
                         
                }
            });
        })
    });
</script>

</html>