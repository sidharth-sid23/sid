<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Functions</h2>

<p>This example calls a function which performs a calculation, and returns the result:</p>

<p id="demo"></p>
<form method="post" action="" >
<input type="text" id="f"><br>
        <input type="text" id="l">
        <br>
        <button class="btn btn-primary" type="button" id="submit" name="submit" onclick="myFunction()">button</button>
        </form>
        <script src="jquery.min.js"></script>
<script>
$(document).ready(function(){ 
$("#submit").click(function(){  
    var fb=document.getElementById("f").value;
function myFunction(f, l) {
  return f * l;
}


document.getElementById("demo").innerHTML = myFunction(fb,l);
});
});
</script>

</body>
</html>
