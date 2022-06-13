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
        button {
            margin-top: 17px;
        }
        div #time-text,div #timer-set{
            border:1px solid black;
            background-color:aliceblue;
        }
        .start,#next{
            font-size: large;
            font-weight:477;
            padding:7px;
            margin-top: 7px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 style="text-align: center; margin-top:10%;">
                    quiz
                </h1>
                <div class="question-box">
                    
                    
                    </div>
                <form class="form-group" >
                    <div class="form-group">
                        <div class="form-control-sm" id="time-text">time left</div>
                        <div class="form-control-sm" id="timer-set">10</div>
                        <label class="form-label" id="serial_numberwise"></label>
                        <label class="form-label" id="fq"></label><br>
                        <!-- <input type="radio" id="abc" name="option1" class="form-check-input.option1" value="Hypertext Preprocessor"> -->
                        <label id="option1"></label><br>
                        <!-- <input type="radio" id="xyz" name="option1" class="form-check-input.option1" value="pre hypertext processor"> -->
                        <label id="option2"></label>
                    </div>
                    <div class="form-group">
                        <label class="form-label" id="second"></label><br>
                        <label id="option3"></label><br>
                        <label id="option4"></label>
                    </div>
                    <div class="form-group" id="third">
                    </div>
                    <button class="btn btn-primary start" type="button" id="start" name="start">START</button>
                    <button class="btn btn-primary" type="button" id="next" name="next">NEXT</button>
                    <label id="total_number_question_counting"></label>
                </form>
            </div>
        </div>
    </div>
</body>
</html>