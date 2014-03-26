$(document).ready(function(){
	$("#myForm").submit(function validateInformation()
	{
		var emailAddress = document.getElementById('email').value;

		var emailFilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		//Explanation:  Look for any character followed by an @ sign with any charcter(s) following. After the characters look for a '.' followed by two to four characters
alert(emailAddress);
		var passwordFilter =/([a-zA-Z0-9_\.\-])/;
		var password = document.getElementById("password").value;
alert(password);

		 if(emailAddress == "") //Check if empty
		{
			alert("Login Email Address must not be empty.");
			event.preventDefault();
		}
		else if(!emailFilter.test(emailAddress)) //Check if valid
		{
			alert('Please provide a valid email address. Emails must follow this format: name@institution.domain');
			event.preventDefault();
		}
		else
		{
			
			alert("Valid Email");
		}

		 if(password == "") //Check if empty
		{
			alert("Password must not be empty.");
			event.preventDefault();
		}
		else if(!passwordFilter.test(password)) //Check if valid
		{
			alert('Please provide a password with only alphabetical or numerical characters');
			event.preventDefault();
		}
		else
		{
			
			alert("Valid Password");
		}

	});
});


