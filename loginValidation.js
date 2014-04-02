$(document).ready(function(){
	$("#myForm").submit(function validateInformation()
	{
		var username = document.getElementById('username').value;

		var userNameFilter = /^([a-zA-Z0-9]{1,20})$/;
		//Explanation:  Look for any character followed by an @ sign with any charcter(s) following. After the characters look for a '.' followed by two to four characters
	alert(emailAddress);
		var passwordFilter =/([a-zA-Z0-9])/;
		var password = document.getElementById("password").value;
	alert(password);

		 if(username == "") //Check if empty
		{
			alert("Login Email Address must not be empty.");
			event.preventDefault();
		}
		else if(!userNameFilter.test(username)) //Check if valid
		{
			alert('Please provide a valid username');
			event.preventDefault();
		}
		else
		{

			alert("Valid username");
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


