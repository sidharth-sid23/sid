
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<input  type="text"id="f" name="">

<input  type="text"  id="s" name="">
<button type="button" >click</button>
<script src="jquery/jquery.min.js">
</script>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $f=$("f").val();
            $s=$("s").val();
            
        });
    })
</script>