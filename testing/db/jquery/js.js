
$(document).ready(function(){
    $("#submit").hide();
    $("#btn1").hide();
    $("#inputvalue1").hide();
    $("#inputvalue2").hide();
    $("#hello").hide();
    $("#inputname").hide();
    $("#btn2").click(function(){
        $("#inputname").show();
        $("#btn1").show();
        $("#btn2").hide();
        });
        $("#btn3").click(function(){
          $("#inputvalue1").first().clone().appendTo("#inputvalue1");
          $("#submit").show();
    });
    $("#btn1").click(function(){
        $("#inputvalue1").show();
    $("#inputvalue2").show();
    $("#btn3").show();
    });
});