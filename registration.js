$(document).ready(function(){
	$("#myForm").submit(function(){
		
		//Setting up filters and acquiring user information
		var emailFilter = /([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+/;
		var emailAddress = document.getElementById("email").value;
		
		var passwordFilter =/([a-zA-Z0-9_\.\-])/;
		var password = document.getElementById("pass").value;
		
		var nameFilter = /([a-zA-z\-])/;
		var firstName = document.getElementById("fName").value;
		var lastName = document.getElementById("lName").value;
		
		//Validation Testing
		
		if(emailAddress == "") //Check if empty
		{
			alert("Registration Email Address must not be empty.");
		}
		else if(!emailFilter.test(emailAddress)) //Check if valid
		{
			alert('Please provide a valid email address. Emails must follow this format: name@institution.domain');
		}
		else
		{
			alert("Valid Email");
		}
		
		
		
		if(password == "")
		{
			alert("Password must not be empty");
		}
		else if(!passwordFilter.test(password))
		{
			alert("Please use a password with alphabetical and numerical characters only");
		}
		else
		{
			alert("Valid Password");
		}
		
		
		
		
	 	if(firstName == "")
		{
			alert("First Name must not be empty");
		}
		else if(!nameFilter.test(firstName))
		{
			alert("Please provide a first name with only alphabetical characters");
		}
		else
		{
			alert("Valid First Name");
		}
		
		
		
		
		if(lastName == "")
		{
			alert("Last Name must not be empty");
		}
		else if(!nameFilter.test(lastName))
		{
			alert("Please provide a last name with only alphabetical characters");
		}
		else
		{
			alert("Valid last Name");
		}

	
		

	}); 
});