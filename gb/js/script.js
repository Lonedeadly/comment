$(document).ready(function(){
	
	$("#addcomment").submit(function(){
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "controler.php",
			data: str,
			success: function(html){
				$('#container').html(html);
			} 
		});
		return false;
	})   
	
	$("#addcomment").submit(function(){
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "controler.php",
			data: str,
			success: function(html){
				$('#container').html(html);
			} 
		});
		return false;
	})
})