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
    button{
        margin-top:17px;
    }
</style></head>
<body> 
        <div class="container" >
                <div class="row">
                    <div class="col-md-6">
                            <h1 style="text-align: center; margin-top:10%;">
                            quiz
                            </h1>
                     <form class="form-group" method="post" action="" >
                            <div class="form-group" > 
                                <label class="form-label" id="first"></label><br>
                               <label id="option1"></label><br>
                                <label id="option2"></label>
                                </div>
                             
                            <button class="btn btn-primary" type="button" id="start" name="next">start</button>
                      <button class="btn btn-primary" type="button" id="next" name="submit2">next</button>  

                       </form>
                   </div>
                 </div>
        </div>
</body>
<script src="jquery.min.js"></script>
<script>
       
    $(document).ready(function(){
         $("#start").click(function(){
          var data=  [
        {
            question:"what is php?",
            answers: {
                option1: "Hypertext Preprocessor",
                option2: "pre hypertext processor"               
            },
            answer:"Hypertext Preprocessor"
        },
        {
            question: "What is HTML?",
            answers: {
                option1: "hypertextmarkuplanguage",
                option2:"hypertextmarkedlanguage"
             },
            answer: "hypertextmarkuplanguage"
        },
        {
            question: "php  is  server side?",
            answers: {
               option1: "TRUE",
               option2:"FALSE"
             },
            answer: "TRUE"
        }
]
function run(data,count)
                    {         
                            if(count<data.length)
                            {   
                                $("#first").html(data[count]["question"]);
                                $("#option1").html("<input type=radio name=option1>"+data[count]["answers"]["option1"]);
                                $("#option2").html("<input type=radio name=option1>"+data[count]["answers"]["option2"]);
                               
                               console.log(count);
                            }}
                            run(data,count);
         });
        });