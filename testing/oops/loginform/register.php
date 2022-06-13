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
<div class="container mt-5">
            <div class="row">
                <div class="p-3 mb-2 bg-black text-white col-6">
                        <h1 class="text-center">REGISTER fORM</h1>
                    <form class="form-group" method="post">
                        <div class="form-group">
                            <label class="form-label">NAME <span class="error_name text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="name" name="name" >
                        </div>
                        <div class="form-group">
                            <label class="form-label">EMAIL<span class="error_email text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="email" name="email" >
                        </div>
                        <div class="form-group">
                            <label class="form-label">PASSWORD <span class="error_password text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="password" name="password" >
                        </div>
                        <div class="form-group">
                            <label class="form-label">CONFIRMPASSWORD <span class="error_confirmpassword text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="confirmpassword" name="confirmpassword" >
                        </div>
                        <div class="form-group">
                             <label class="form-check-label">GENDER</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" >
                            <label class="form-check-label">MALE</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label">FEMALE</label>
                        </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit" name="submit" id="submit" >SUBMIT</button>
                        <div  id="html" class="alert alert-success" role="alert"><h1></h1></div>
                     </form>
                </div>
            </div>
        </div>
    <script src="jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#html").hide();
            $("form").submit(function(){
            event.preventDefault();
                $.ajax({
                    url:"ajax.php",
                    type:"post",
                    data:$("form").serialize(),
                    datatype:"json",
                    success: function (response){
                        console.log(response);
                            var data =JSON.parse(response);
                            console.log(data);
                            if(data.error_name !="" || data.error_name !=NULL)
                            { $('.error_name').show().text(data.error_name); }

                             if(data.error_name != "" || data.error_name !=NULL)
                            {
                                $('.error_email').show().text(data.error_email);
                            }

                            if(data.error_password !="" || data.error_password !=NULL){
                                $(".error_password").show().text(data.error_password);
                            }

                            if(data.error_confirmpassword !="" || data.error_confirmpassword !=NULL){
                                $(".error_confirmpassword").show().text(data.error_confirmpassword);
                            }
                            
                        $("#html").show();
                        $("#html").html("data inserted");
                    }
                });
            });
        });
    </script>
</body>
</html>