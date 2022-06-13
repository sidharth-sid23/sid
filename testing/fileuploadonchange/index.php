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
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <h1>fileupload</h1>
                <form class="form-group mt-5" enctype="multipart/form-data" id = "form">
                    <input type="file" class="form-control" id="fileupload" name="image">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script src="../jquery/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#fileupload").on('change',function(){
            var form= new FormData($('#form')[0]);
          
            console.log(form);
                
                    $.ajax({
                    url: "ajaxfile.php",
                    type: "post",
                    data: form, 
                    processData: false,
                    contentType: false,

                    success: function(result){
                        console.log(result);
                    }
                    });
        });
    });
</script>