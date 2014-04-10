<!DOCTYPE html>


<head profile="H.E.A.R.T">

<LINK REL=StyleSheet HREF="main.css" TYPE="text/css" MEDIA=screen>
<title>H.E.A.R.T</title>
<link rel="icon" 
type="image/png" 
href="http://openclipart.org/image/800px/svg_to_png/135571/OCAL_Favorites_Icon_Selected_Green.png">

</head>
<body>

<div data-role="page">
	<div data-role="header">
		<h1>H.E.A.R.T Systems</h1>
	</div><!-- /header -->

	<div data-role="content">
<div id="banner"> <center><h2> Welcome to H.E.A.R.T Systems! </h2></center>

<center><h4> Please Register or Login Below</h4></center>
<center>
</div>

<ul data-role="listview" data-inset="true">
            <li><a href="showdata.html">Show Data</a></li>
            <li><a href="showgraph.html">Show Graph</a></li>
        
           
       <?php
        include_once('db.php');
echo "made it to the server"; 
		$username = mysql_real_escape_string( $_POST["username"] );
		$password = mysql_real_escape_string( md5($_POST["password"]) );
		

		if( empty($username) || empty($password) )
			echo "Username and Password Mandatory - from PHP";
		else
		{
		$sql = "SELECT count(*) FROM userinfo WHERE(
		        username='$username' 
				AND 
				password='$password')";
 
 
	    $res = mysql_query($sql);
		$row = mysql_fetch_array($res);
 
		if( $row[0] > 0 )
		 echo "Login Successful";
		else
		 echo "Failed To Login";
   		}		
?>
    
        </ul>
<!-- /content -->


</div>

</body>
</html>
