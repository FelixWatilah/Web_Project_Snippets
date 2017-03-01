$(document).ready(function(){

	$('#register').click(function(){

		var name = $('#name').val();
		var email = $('#email').val();
		var password = $('#password').val();
		var cpassword = $('#cpassword').val();

		if( name =='' || email =='' || password =='' || cpassword ==''){
			alert('Please fill all the fields!!');
		}else if((password.length)<8){
			alert('Password should be at least 8 characters in length.');
		}else if(!(password).match(cpassword)){
			alert('Your passwords does not match! Try again..');
		}else{
			$.post('register.php',{ name1:name, email1:email, password1:password}, function(data){
				if(data=='You have successfully registered!'){
					$('form')[0].reset();
				}
				alert(data);
			});
		}
	});
});