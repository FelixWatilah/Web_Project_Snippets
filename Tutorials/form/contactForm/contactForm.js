$(document).ready(funtion(){
	$('#submit').click(function(){
		var name=$('#name').val();
		var email=$('#email').val();
		var phone=$('#phone').val();
		var message=$('#message').val();

		$('#returnMessage').empty(); //to empty the previous error/success message

		//checking for blank fields
		if (name=='' || email=='' || phone=='' || message=='') {
			alert('Please fill required fields');
		}else {
			// Returns successful data submission message when the entered information is stored in database.
			$.post("contact_form.php", { name1: name, email1: email, message1: message, contact1: contact },
			function(data){
				$("#returnmessage").append(data); // Append returned message to message paragraph.
				if (data == "Your Query has been received, We will contact you soon.") {
					$("#form")[0].reset(); // To reset form fields on success.
				}
			}); 
		}
	});
});