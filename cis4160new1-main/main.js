//jquery hover the button 
$(document).ready(function(){
    $("form button").hover(function(){
        $(this).css("background-color","#FA6C38");
    },function(){
            $(this).css("background-color","orangered");         
    }
    );
});