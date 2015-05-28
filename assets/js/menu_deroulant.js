$(document).ready(function(){
    $('.topnav li').hover(function(){
        $(this).children(".dropdown").show();
    },function(){
        $(this).children(".dropdown").hide();
    })
});
