<?php
session_start();
?>

<!DOCTYPE html>

<head>

<LINK REL=StyleSheet HREF="main.css" TYPE="text/css" MEDIA=screen>
<title>H.E.A.R.T</title>
<head profile="H.E.A.R.T">
<link rel="icon" 
type="image/png" 
href="http://openclipart.org/image/800px/svg_to_png/135571/OCAL_Favorites_Icon_Selected_Green.png">
</head>
</head>

<body style="background-color:white;">

<!The header is the div that holds both the logo and the welcome message. The logo is created first in the
logoContainer div. After that, the welcome to H.E.A.R.T message is created inside of another div called welcome>
<div id="header">
<div id="logoContainer">	
<img src ="http://static.ibsrv.net/car-pictures/diy-electric-car/electric-car-plans.jpg";>
</div>
<div id="welcome">
	<h1> Welcome to H.E.A.R.T!</h1>
</div>
</div>

<! This div holds the menu bar that anybody (you do not have to be logged in) can see. This div uses a class
identifier instead of an id. Only difference is in the CSS>	
<div class="centeredMenu">
<ul>
<li><h2><a href="index.html">Home</a></h2></li>
<li><h2><a href="registration.php">Register</a></h2></li>
<li><h2><a href="login.php">Log in</a></h2></li>
<li><h2><a href="about.html">About</a></h2></li>
<li><h2><a href="ourteam.html">Our Team</a></h2></li>
<li><h2><a href="contact.html">Contact</a></h2></li>
</ul>
</div>

</div>








<br>
<br>


<div id="content">

</div>
</body>




</section><!--/ #content -->

<!--these links below are the only way to display the images in the circles on the Our Team page -->
<!--there doesnt seem to be a way to change the properties of the register, log in, about and contact pages either-->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>		
<link rel='stylesheet' id='tmm_theme_style-css'  href='http://passportparking.com/wp-content/themes/axioma/style.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_skeleton-css'  href='http://passportparking.com/wp-content/themes/axioma/css/skeleton.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_layout-css'  href='http://passportparking.com/wp-content/themes/axioma/css/layout.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_custom1-css'  href='http://passportparking.com/wp-content/themes/axioma/css/custom1.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_custom2-css'  href='http://passportparking.com/wp-content/themes/axioma/css/custom2.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_fancybox-css'  href='http://passportparking.com/wp-content/themes/axioma/js/fancybox/jquery.fancybox.css?ver=3.7.1' type='text/css' media='all' />
</html>
<link rel="icon" 
      type="image/png" 
      href="http://openclipart.org/image/800px/svg_to_png/135571/OCAL_Favorites_Icon_Selected_Green.png">
							
<ul>
<form method='post' action ='login.php'>
<table width='400' border='5' align='center'
<tr>
<td colspan='5' align='center'><h2>Log in:</h2></td>
</tr>

<tr>
<td align='center'> Email:</td>
<td><input type='text' name='email' /></td>
</tr>

<td align='center'>Password:</td>
<td><input type='password' name='pass' /></td>
</tr>

<tr>
<td colspan='5' align='center'><input type='submit' name='login'
value='Login' /></td>
</tr>

</table>
</form>
</ul>
<br>

<ul>
<h4>Not registered yet?<a href='registration.php'> Register Here</a></h4>
</ul>

</body>

</section><!--/ #content -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>		
	

<link rel='stylesheet' id='tmm_theme_style-css'  href='http://passportparking.com/wp-content/themes/axioma/style.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_skeleton-css'  href='http://passportparking.com/wp-content/themes/axioma/css/skeleton.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_layout-css'  href='http://passportparking.com/wp-content/themes/axioma/css/layout.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_custom1-css'  href='http://passportparking.com/wp-content/themes/axioma/css/custom1.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_custom2-css'  href='http://passportparking.com/wp-content/themes/axioma/css/custom2.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_fancybox-css'  href='http://passportparking.com/wp-content/themes/axioma/js/fancybox/jquery.fancybox.css?ver=3.7.1' type='text/css' media='all' />
</html>

<?php
mysql_connect("mysql16.000webhost.com","a8727958_isat306","Liberty22");
mysql_select_db("a8727958_isat306");

if(isset($_POST['login'])){

$password = $_POST['pass'];
$email = $_POST['email'];

$check_user = "select * from users where user_pass='$password' AND user_email='$email'";

$run = mysql_query($check_user);

if(mysql_num_rows($run)>0){

$_SESSION['email']=$email;

echo "<script>window.open('welcome.php','_self')</script>";
}

else {
echo "<script>alert('Email or password is incorrect')</script>";
}
}
?>
