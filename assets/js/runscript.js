$(document).ready(function(){

	$('.run-script').click(function(){
		
		$.post("/run", {
	        filename: $(this).attr("script")
	    },
	    function(data, status){
	        console.log(data)
	    });
		
	});
		
	
	
});