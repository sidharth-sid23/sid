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
                <div class="p-3 mb-2 bg-secondary text-white col-6">
                        <h1 class="text-center">LOGIN FORM</h1>
                    <form class="form-group" method="post">
                        <div class="form-group">
                        <label class="form-label">EMAIL</label>
                        <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                        <label class="form-label">PASSWORD</label>
                        <input type="password" class="form-control" name="password">
                        <div class="html"><h2></h2></div>
                        <button class="btn btn-primary mt-3" type="submit" name="submit">login</button>
                        </div>
                    </form>
                </div>
            </div>
</div>
 <script src="jquery/jquery.min.js"></script>
 <script>
     $(document).ready(function(){
        $("form").submit(function(){
            event.preventDefault();
                $.ajax({
                url:"loginajax.php",
                type:"post",
                data:$("form").serialize(),
                datatype:"json",
                success:function(response)
                {
                    console.log(response);
                    $(".html").html(response)
                    if(response == 'error')
                    {
                        window.location.href = 'welcompage.php';
                    }else{
                        alert('wrong credentials');
                    }
                 
                }
            });
        });
     });
 </script>
</body>
</html>