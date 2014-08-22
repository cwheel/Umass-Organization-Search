var moved = false;

$(document).ready(function() {
	$('input').keypress(function (e) {
	    if (e.which == 13) {
	       return false; 
	    }
	    
	    if (!moved) {
	       $("#search").addClass("slideToTop");
	       $("#results").addClass("slideToTopResults");
	       $("#searchLogo").addClass("fadeLogo");
	       
	       moved = true;
	    }
	    
	    $.ajax({
		    type: "GET",
		    url: "query.php",
		    data: 'query='+ $("#searchField").val(),
		    success: function(results){
		    	$("#results").html(results);
		    }
	    });
	});
});
