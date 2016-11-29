//Alanna Fischer aef222// 

// functions
$(document).ready(function(){

//hides the footer// 
$("#hide").click(function(){
    $("footer").hide();
});

//moves the Uber//
$("#car_image").click(function(){
    $("#car").animate({left:'700px'},1000);
});
    
//Makes the ghost appear and disappear//
$("#text").click(function(){
    $("#ghost").fadeToggle(3000);
        
});


});

//changes the colors to spring//

function setSpringTheme(){
    $("nav").css("background-color","#1C4905")
    $("body").css("background-color","#D8ECC3")
}
//changes the colors to fall//
function setFallTheme(){
    $("nav").css("background-color","#A52A2A")
    $("body").css("background-color","#FFD700")
}


