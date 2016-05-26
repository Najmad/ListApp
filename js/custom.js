$(document).ready(function(){
	//READY!
	//Focus on the TExt Field
	$(#taskInput).Focus();
	console.log("READY!");

	var task = "";

	$("#actionBtn").click(function(){
		console.log( "Click Test: Success");

		task = $("#taskInput").val();
		
		//pre cleanup
		//alert(task);
		//Test CLEAN UP with <script> alert()</script>
		task = cleanUp(task);
		//post clean up
		//alert(task);
		//When the data is validated and ready to be sent
		$("#todoForm").submit();
		

	});

});