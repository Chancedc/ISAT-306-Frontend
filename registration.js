$(document).ready(function(){
	$("#myForm").submit(function(){
		
		//Setting up filters and acquiring user information
		var userNameFilter = /^([a-zA-Z0-9_\.\-]{1,20})$/;
		var userName = document.getElementById("username").value;
		
		var passwordFilter =/([a-zA-Z0-9]{2,20})/;
		var password = document.getElementById("pass").value;
		
	//	var nameFilter = /([a-zA-z\-])/;
	//	var firstName = document.getElementById("fName").value;
	//	var lastName = document.getElementById("lName").value;
		
		//Validation Testing
		
		if(userName == "") //Check if empty
		{
			alert("Username field must not be empty.");
		}

		else if(!userNameFilter.test(userName)) //Check if valid
		{
			alert('Please provide a valid username. Usernames must be less than twenty characters in length, and the characters must be alphanumerical.');
		}
		else
		{
			alert("Valid Username");
		}
		
		
		
		if(password == "")
		{
			alert("Password field must not be empty");
		}
		else if(!passwordFilter.test(password))
		{
			alert("Please use a password with alphabetical and numerical characters only");
		}
		else
		{
			alert("Valid Password");
		}
		
		
		
		
/**	 	if(firstName == "")
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

	**/
	

	}); 
});