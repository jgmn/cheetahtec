 $(document).on("ready",function()
 {
 	$("#start").on("click", function() {
 		$("html,body").animate({ scrollTop : $("#finish").offset().top  }, 1500 );
 	});
 });