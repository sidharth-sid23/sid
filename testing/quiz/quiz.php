<?php include_once "form.php" ?>
<script src="jquery/jquery.min.js">

</script>

<script>
    let questionHTML='';
    let correctanswer=0;
    function myfunction(data, count) {
    //     questionHTML=`<form>
    //     <h3>Question ${data[count]['number']}: ${data[count]['question']} </h3>
    //     <input type="radio"  id="abc" name="option1"  value=" ${data[count]["answers"]["option1"]} ">" ${data[count]["answers"]["option1"]}
    //     <div class="form-group">
    //     <div class="form-check">
    // <input class="form-check-input" type="radio" name="option1" id="question2" value="${data[count]['option2']}">
    // <label class="form-check-label" for="exampleRadios2">
    // ${data[count]["option2"]};
    // </label>
    // </div>
    //     </div>
    //     </form>`; 
    //     return questionHTML;
         $("#serial_numberwise").html(data[count]['number']);
        $("#fq").html(data[count]['question']);
        $("#option1").html("<input type=radio class=option id=abc name=option1 value=" + data[count]["answers"]["option1"]+ ">" + data[count]["answers"]["option1"]);
        $("#option2").html("<input type=radio class=option  id=xyz name=option1>" + data[count]["answers"]["option2"]);
    }
    var radiobuttoncheck="";
        $(document).ready(function() {
                $("#next,#abc,#xyz").hide();
                $("#start").click(function() {
                   $.getJSON('question.json', function(data) {
                        console.log(data);
                        var count = 0;
                        $("#next").show();
                        $("#start").hide();
                       if($('input[name=option1]').is(':checked')) {
                        let UserSelecedValue = $("input[name='option1']:checked").val();
                        if (UserSelecedValue == data[count].answer)
                        {
                            correctAnswers++;
                        }
                        }
                         myfunction(data, count);
                         counting_question(data,count);
                        count++;
                        $("#next").click(function() {
                                if (count < data.length) {
                                function myfunction(data, count) {
                                    

                                     $("#serial_numberwise").html(data[count]['number']);
                                     $("#fq").html( data[count]['question'] + "</span>");
                                     $("#option1").html("<input type=radio  class=option1 name=question value=" + data[count]["answers"]["option1"] + ">" + data[count]["answers"]["option1"]);
                                    $("#option2").html("<input type=radio class=option2 name=question value=" + data[count]["answers"]["option2"] + ">" + data[count]["answers"]["option2"]);
                                    // console.log($("input[name='question']:checked").val());
                                    if(radiobuttoncheck==data[count]["answer"])
                                    {
                                        console.log("ok");
                                    }
                                   // counting question called
                                    counting_question(data,count);
                                   }
                                    // first function called
                                    myfunction(data, count);

                                    function secondques() {
                                        myfunction(data, count);
                                        count++;
                                    }
                                    //second function called
                                    secondques();

                                }
                                    else {
                                        document.write("question completed");
                                    }
                           
                        });
                                function counting_question(data,count)
                                {
                                    $("#total_number_question_counting").html("<span>"+data[count]['number']+" of 3 questions</span>");
                                }

                    });
                   
                });
            });
</script>

