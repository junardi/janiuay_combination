$(function(){

	$("ul.dropdown li").hover(function(){
    
        $('ul:first',this).css('visibility', 'visible');
    
    }, function(){
   
        $('ul:first',this).css('visibility', 'hidden');
		
    });
    

	$("ul.dropdown li ul li ul li").mouseenter(function() {
		$(this).parent('ul').css("left", "90%");
	}).mouseleave(function(){
		$(this).parent('ul').css("left", "83%");
	});
	
    $("ul.dropdown li ul li:has(ul)").find("a:first").append(" &raquo; ");

});