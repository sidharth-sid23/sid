<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="bg-light bg-gradient">
    <div class="container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-4">
                <h1 class="text-center">Register form</h1>
                <form class="form-control" id="form1" method="post" action="">
            <div class="col-auto">
    <label for="" class="col-form-label">NAME</label>
  </div>
  <div class="col-auto">
    <input type="text" id="name" placeholder="NAME" class="form-control" name=name">
  </div>
  <div class="col-auto">
    <label for="" class="col-form-label">EMAIL</label>
  </div>
  <div class="col-auto">
    <input type="email" id="email" placeholder="EMAIL" class="form-control" name="email">
  </div>
  <div class="col-auto">
    <label for="" class="col-form-label">PASSWORD</label>
  </div>
  <div class="col-auto">
    <input type="password" id="password" placeholder="PASSWORD" class="form-control" name="password">
  </div>
  <div class="col-auto">
    <label for="" class="col-form-label">CONFIRMPASSWORD</label>
  </div>
  <div class="col-auto">
    <input type="password" id="confirmpassword" placeholder="CONFIRMPASSWORD" class="form-control" name="confirmpassword">
  </div>
  <div class="col-auto">
    <label for="" class="col-form-label">GENDER</label>
  </div>
  <div class="col-auto">
  <label for="" class="col-form-label">MALE</label>
    <input type="radio" id="male" " class="form-check-input" name="gender">
    <label for="" class="col-form-label">FEMALE</label>
    <input type="radio" id="female" class="form-check-input" name="gender">
    
  </div>
  <div class="col-auto">
    <label for="" class="col-form-label">HOBBIES</label>
  </div>
  <div class="col-auto">
  <label for="" class="col-form-label">PLAY</label>
    <input type="checkbox" id="play"  class="form-check-input" name="play">
    <label for="" class="col-form-label">STUDY</label>
    <input type="checkbox" id="study"  class="form-check-input" name="study">
    
  </div>
  <div class="col-auto">
    <label for="" class="col-form-label">imageupload</label>
  </div>
  <div class="col-auto">
    <input type="file" id="image" placeholder="photo" class="form-control" name="image">
  </div>
  <button   type="submit" class="btn btn-primary mt-3" name="submit">register</button>
                </form>
            </div>
            
        </div>
 
  
 
</div>
</body>
</html>
<script src="../jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("form").submit(function(){
      event.preventDefault();
     

        var formdata=new FormData(this[0]);
        console.log(formdata);
        $.ajax({
          url: "ajax.php",
          type: "post",
          data:formdata,
          contentType:false,
          processData:false,
          success:function(result)
          {
              console.olog(result);
          }
        });
    });
});
</script>