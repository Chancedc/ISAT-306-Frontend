var xmlHttp = createXmlHttpRequestObject();

/* ALL AJAX programs will use this function.  This function creates the object */
function createXmlHttpRequestObject() {
	var xmlHttp;

	/* Check if IE is being used, then try for other browsers */
	if(window.ActiveXObject){
		try{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp = false;
		}
	}else{
		try{
			xmlHttp = new XMLHttpRequest();
		}catch(e){
			xmlHttp = false;
		}
	}
	/* check if the object was created.  alert the user if it wasn't and 
	   return the object if it was */
	if(!xmlHttp)
		alert("cant create that object hoss!");
	else
		return xmlHttp;
}

/* This function communicates with the server */
function process() {
	/* Check if the object is ready to communicate */
	if(xmlHttp.readyState==0 || xmlHttp.readyState==4){
		/*  Get what the user typed in and communicate with the server.  First parameter is the request method
		    the second is what we're sending to the php file the last is true to
		    make it asynchronous*/

		if (requiredFieldValidator() && expressionValidator()) {
			
			address = encodeURIComponent(document.getElementById("address").value);
			size = encodeURIComponent(document.getElementById("size").value);
			age = encodeURIComponent(document.getElementById("age").value);
			residents = encodeURIComponent(document.getElementById("residents").value);
			utility = encodeURIComponent(document.getElementById("utility").value);

			var queryString = "?address=" + address ;
  	    	queryString +=  "&size=" + size + "&age=" + age + "&people" + people + "&utility" + utility;
			xmlHttp.open("GET", "editProfile.php?queryString="+queryString,true);
			
			/* Do something with response you get back */
			xmlHttp.onreadystatechange = handleServerResponse;
			
			/* send request.  parameter is null because GET is used */
			xmlHttp.send(null);			
		}else{
			alert("Please enter valid information");
		}

	}else{
		/* wait time if busy */
		setTimeout('process()',1000);
	}
}

function handleServerResponse(){
	if(xmlHttp.readyState==4){
		if(xmlHttp.Status==200){
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message = xmlDocumentElement.firstChild.data;
			document.getElementById("underInput").innerHTML = '<span style="color:blue">' + mesage + '</span>';
			setTimeout('process()',1000);
		}else{
			alert('Something went wrong');
		}
	}
}

// form validation
function requiredFieldValidator() {
	
	var aCheck=encodeURIComponent(document.getElementById("address").value);
	var sCheck=encodeURIComponent(document.getElementById("size").value);
	var agCheck=encodeURIComponent(document.getElementById("age").value);
	var rCheck=encodeURIComponent(document.getElementById("residents").value);
	var uCheck=encodeURIComponent(document.getElementById("utility").value);

	var errorMess = "The following fields are required: \n";
	var noErr = true;

	if (aCheck==null || aCheck=="")
  	{
  		//alert("Address must be filled out");
  		errorMess += "\tAddress\n";
  		noErr = false;
  	}

	if (sCheck==null || sCheck=="")
  	{
  		//alert("Size must be filled out");
  		errorMess += "\tSize\n";
 		noErr = false;
  	}

	if (agCheck==null || agCheck=="")
  	{
  		//alert("Age must be filled out");
  		errorMess += "\tAge\n";
  		noErr = false;
  	}

	if (rCheck==null || rCheck=="")
  	{
  		//alert("Number of residents must be filled out");
  		errorMess += "\tNumber of residents\n";
  		noErr = false;
  	}

	if (uCheck==null || uCheck=="")
  	{
  		//alert("Utility must be filled out");
  		errorMess += "\tUtility";
  		noErr = false;
  	}
  	if (!noErr) 
  	{
  		alert(errorMess);
  	};
  return noErr;
}

function expressionValidator() {

	var aCheck=encodeURIComponent(document.getElementById("address").value);
	var sCheck=encodeURIComponent(document.getElementById("size").value);
	var agCheck=encodeURIComponent(document.getElementById("age").value);
	var rCheck=encodeURIComponent(document.getElementById("residents").value);
	var uCheck=encodeURIComponent(document.getElementById("utility").value);

	var errorMess = "";
	var noErr = true;

	if (typeof aCheck != 'string') {

		errorMess += "";
		noErr = false;
	};
	if (typeof sCheck != 'number') {

		errorMess += "Size must be a number\n";
		noErr = false;
	};
	if (typeof agCheck != 'number') {

		errorMess += "Age must be a number\n";
		noErr = false;
	};
	if (typeof rCheck != 'number') {

		errorMess += "The number of residents must be a number\n";
		noErr = false;
	};
	if (typeof uCheck != 'string') {

		errorMess += "";
		noErr = false;
	};
	
	alert(errorMess);

	return noErr;
}

/*function testFunction() {
	alert("This action is functional");
}*/