(function($) {
    "use strict";
    $(document).on('ready', function() {	
	
		/* Precon Settings */
		$('.elena-options .icon').on('click', function(event){
			event.preventDefault();
			if( $ (this).hasClass('inOut')  ){
				$('.elena-options').stop().animate({right:'0px'},500 );
			} else{
				$('.elena-options').stop().animate({right:'-245px'},500 );
			} 
			$(this).toggleClass('inOut');
			return false;

		});

		/* Precon Colors */
		$(".skin1" ).on('click', function(){
			$("#elena_custom" ).attr("href", "css/skins/skin-1.css" );
			return false;
		});
		$(".skin2" ).on('click', function(){
			$("#elena_custom" ).attr("href", "css/skins/skin-2.css" );
			return false;
		});
		$(".skin3" ).on('click', function(){
			$("#elena_custom" ).attr("href", "css/skins/skin-3.css" );
			return false;
		});
		$(".skin4" ).on('click', function(){
			$("#elena_custom" ).attr("href", "css/skins/skin-4.css" );
			return false;
		});
		$(".skin5" ).on('click', function(){
			$("#elena_custom" ).attr("href", "css/skins/skin-5.css" );
			return false;
		});
		$(".skin6" ).on('click', function(){
			$("#elena_custom" ).attr("href", "css/skins/skin-6.css" );
			return false;
		});
		$(".skin7" ).on('click', function(){
			$("#elena_custom" ).attr("href", "css/skins/skin-7.css" );
			return false;
		});
		$(".skin8" ).on('click', function(){
			$("#elena_custom" ).attr("href", "css/skins/skin-8.css" );
			return false;
		});
		
	});	
		
})(jQuery);