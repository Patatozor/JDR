$(document).ready(function(){

    $('.topnav li').hover(function(){
        $this = $(this);
        $this.children(".dropdown").show();
    },function(){
        $this = $(this);
        $this.children(".dropdown").hide();
    })

});
