$(document).ready(function(){

	$('.run-script').click(function(){
		
		$.post("/run", {
	        filename: $(this).attr("script")
	    },
	    function(data, status){
	        $('#page-title').html(data.filename);
	        
	        var output = '';
	        $.each(data.output, function(linenumber, line) {
	        	output += line
	        })
	        
	        $('#console-output').html(output);
	    }, 'json');
		
	});
		
	
	
});