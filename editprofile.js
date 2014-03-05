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
		/* Get what the user typed in */
		address = encodeURIComponent(document.getElementById("address").value);
		size = encodeURIComponent(document.getElementById("size").value);
		age = encodeURIComponent(document.getElementById("age").value);
		residents = encodeURIComponent(document.getElementById("residents").value);
		utility = encodeURIComponent(document.getElementById("utility").value);
		/* Communicate with the server.  First parameter is the request method
		   the second is what we're sending to the php file the last is true to
		    make it asynchronous*/
		var queryString = "?address=" + address ;
  	    queryString +=  "&size=" + size + "&age=" + age + "&people" + people + "&utility" + utility;
		xmlHttp.open("GET", "editProfile.php?queryString="+queryString,true);
		/* Do something with response you get back */
		xmlHttp.onreadystatechange = handleServerResponse;
		/* send request.  parameter is null because GET is used */
		xmlHttp.send(null);
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