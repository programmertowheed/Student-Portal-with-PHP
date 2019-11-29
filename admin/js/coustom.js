$(document).ready(function(){
	$(window).scroll(function(){
		
	var win = $(window).scrollTop();	
	
		if(win>90){
		$(".menu_bg").addClass("fixed");
		}
		else{
		$(".menu_bg").removeClass("fixed");
		}
	});
	
});

/*Callopse Menu Script*/
/*** Vid musklick på Bars aktiveras classen showing ***/

$(document).ready(function(){
    $(".menu-bars .fa-bars").on("click", function(){
        $("nav ul").toggleClass("showing");
    });

 /*** Vid musklick på länk e mneyn så plockas classen showing bort***/
        $("nav ul li a").on("click", function(){
        $("nav ul").removeClass("showing");
        });
});


$(document).scroll(function() {
   if ($(this).scrollTop() > 100){
      $('nav ul').removeClass("showing");
   }
});







