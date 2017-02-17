$(document).ready(function(){
	
	/*
		$.post("js/dashboard/server/getFeedsAfterLoading.php",function(data)
		{
			alert(data);	
		});
	*/
	
	
	$.ajax({
		type: "POST",
		url:  "js/dashboard/server/getFeedsAfterLoading.php",
		success: function(data)
		{
			if (data=="")
			{
				alert("am here");
			}else{
				alert(data);
				$("#sitefeed").prepend(data);	
			}
		},
		error:function(msg)
		{
			alert(msg);
		}
	});
	
	
});