<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <style> 
   .data{
    border:1px solid black;
   }
   td{
       border:1px solid black;
   }
</style>

</head>
<body>
    <div class="container p-4">
    <button class="btn btn-primary float-end addUser" type="button" data-bs-target="#userModal" data-bs-toggle="modal">Add New</button>
        <div class="container">
            <h1>Display Data</h1>
            <table class ="data"></table>
           
        </div>
    </div>
  
    <?php
        include('modal.php')
    ?>

</body>
<script src="jquery/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script> 
var table="";
    function submitLoginForm(form){
        event.preventDefault();
        $.ajax({
            type:'post',
           url:'session.php',
           data:$("form").serialize(),
            success:function(data,status,xhr)
            {  
             $("#form1")[0].reset();
             $(".data").html(data);
           getDayta()
            },
        });
     }

     function getDayta(data){
         
        event.preventDefault();
        $.ajax({
            type:'get',
            url:'session.php',
            data:$('form').serialize(),
            // dataType:'json',
            // data = JSON.parse(data),
            
            success:function(data,status,xhr)
            {   
                console.log(data);
                $('#demo').html(data);
            },
        });
     }
</script>


</html>
<!-- $.ajax({
            type: 'get',
            url: 'ajax/list.php',
            data: $('form').serialize(),
            success: function(data, status, xhr) {
                $('#data').html(data);
            }
        });
    } -->
 