<?php
include "index.php";
?>
<script src="jquery.min.js"></script>
<script>
    var index=0;
    var index2=0;
    var correct_answer="";
     function question_get(data,index,index2){     
            
           //json covert into js objects
            data = JSON.parse(data);
            var  output=`<h3>Question=> ${data["results"][index]['question']}</h3>`;
                $.each(data["results"][index]["incorrect_answers"],function(key,value)
                  {   
                    output+="<br>";
                    output+="<input type=radio name=option1 value="+value+" >"+value;
                  })
                  output+='<br><input type="radio" name="option1" value="data["results"][index]["correct_answer"]" >'+data["results"][index]['correct_answer'];
                  // output=correct_answer;
                 
                  $(".question-box").html(output);
       }
     
    $(document).ready(function(){
      $("#next,#prev").hide();
       
              $("#start").click(function(){
               
                    $.ajax({
                            type:"get",
                            url:"api.php",
                            datatype:"json",
                            success:function(data){
                                 console.log(data);
                                 //hello=data[count].question;
                              hello =question_get(data,index,index2);
                              $(".question-box").html(hello);
                                $("#next,#prev").show();
                                $("#start").hide();
                                $("#next").click(function(){
                                 
                                  index++;
                                  if($('input[name=option1]').is(':checked')) {
                                    var UserSelectedanswer = $("input[name='option1']:checked").val();
                                    // UserSelectedanswer=UserSelectedanswer.trim();
                                    console.log(UserSelectedanswer);
                                  }
                                hello =question_get(data,index);
                                $(".question-box").html(hello);
                                });
                                $("#prev").click(function(){
                                  index--;
                                hello =question_get(data,index);
                                $(".question-box").html(hello);
                                });
                                }
                    });
                });
          
    });
   
</script>
