<?php  include?>
<script>
let questionHTML = '';
var questionNumber = 0;
let resultValue = 0;
let correctAnswers = 0;

$(window).on('load',function(){
    $.getJSON('question.json', function(data) {}
    question = getQuestion();
    $(".question-box").html(question);
});

$(document).ready(function(){
    $("#submit").on('click', function(){
        
        if($('input[name=question]').is(':checked')) {
            let UserSelecedValue = $("input[name='question']:checked").val();
            if (UserSelecedValue == questions[questionNumber].answer)
            {
                correctAnswers++;
            }
            else 
            {
                // console.log('false');
            }
            // console.log(UserSelecedValue);
            questionNumber++;
            question = getQuestion();
            $(".question-box").html(question);
            
         }
        else {alert('please select any option');}
    });
});
</script>
function getQuestion()
{
    if(questionNumber < questions.length)
    {
        questionHTML=`<form>
        <h3>Question: ${questions[questionNumber].question} </h3>
        <div class="form-group">
        <div class="form-check">
    <input class="form-check-input" type="radio" name="question" id="question1" value="${questions[questionNumber].option1}">
    <label class="form-check-label" for="exampleRadios1">
    ${questions[questionNumber].option1}
    </label>
    </div>
        </div>
        <div class="form-group">
        <div class="form-check">
    <input class="form-check-input" type="radio" name="question" id="question2" value="${questions[questionNumber].option2}">
    <label class="form-check-label" for="exampleRadios2">
    ${questions[questionNumber].option2}
    </label>
    </div>
        </div>
        </form>`;  
    }
    else
    {
       alert('no more questions'); 
       questionHTML=`Right Answers are ${correctAnswers} / ${questions.length}`;
       $("#submit").hide(); 
    }
    return questionHTML;
    
}


