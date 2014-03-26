$("#submit").click( function() {
 
alert("click function ran");
if($("#username").val != "")
{
	alert("fields are filled");
	 $.post( $("#myForm").attr("action"),
	         $("#myForm :input").serializeArray(),
			 function(info) {
 
			   $("#ack").empty();
			   $("#ack").html(info);
				clear();
			 });
 
	$("#myForm").submit( function() {
	   return false;	
	});
}
else
{
	alert("Fields must not be empty");
}
	
});
 
function clear() {
 
	$("#myForm :input").each( function() {
	      $(this).val("");
	});
 
}