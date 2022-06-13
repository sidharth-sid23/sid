<?php  
include_once "index.php";
?>
<script src="jquery.min.js"></script>
<script>
 let questionHTML = '';
var count = 0;
var counter = 0;
let resultValue = 0;
let correctAnswers = 0;

function getquestion(data,count) {   
    if(count < data.length)
    {
         questionHTML=`<form>
        <h3>Question ${data[count]['number']}: ${data[count]['question']} </h3>
        <input type="radio"  class="form-check-input" name="option1"  value=" ${data[count]["answers"]["option1"]} "> ${data[count]["answers"]["option1"]}
       
        <div class="form-check">
    <input class="form-check-input" type="radio" name="option1"  value="${data[count]['answers']['option2']}">   
    ${data[count]['answers']["option2"]}
   
    </div>
       
        </form>`;  
                                      
        }
        else  
    { 
    
    questionHTML=`Right Answers are ${correctAnswers} / ${data.length}`;
       $("#next").hide();
       $(".question-box").html(questionHTML);
       alert('no more questions');
       }
       
       return questionHTML; 
}


$(document).ready(function(){
    $("#next,#submit,#destroy").hide();
                $("#start").click(function() {
                    
                   $.getJSON('question.json', function(data) {
                        $("#next,#submit,#destroy").show();
                        $("#start").hide();
                        console.log(data);
                        question = getquestion(data,count);
                        $(".question-box").html(question);
                       
                        // count is now 1
                        $("#next").click(function(){
                            //check the radio button is selscted
                               if($('input[name=option1]').is(':checked')) {
                                let UserSelectedanswer = $("input[name='option1']:checked").val();
                                let useranswer= UserSelectedanswer.trim(); 
                                console.log(useranswer);                            
                               let correctans=data[counter]["answer"];
                               console.log(correctans);
                                if(useranswer == correctans){
                                correctAnswers++;
                                }  else{
                                    console.log("something wrong");
                                }
                                
                                count++;
                                counter++;
                                 //then recall the  previos function                       
                                 question = getquestion(data,count);
                                $(".question-box").html(question);
                              
                    }
                                else{
                                    alert("pls select anyone");
                                }
                   
                        });
                   });
                   
                });
            });
</script>