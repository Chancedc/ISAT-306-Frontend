<?php
session_start();
?>

<html>
<title>H.E.A.R.T</title>

<link rel="icon" 
      type="image/png" 
      href="http://openclipart.org/image/800px/svg_to_png/135571/OCAL_Favorites_Icon_Selected_Green.png">

<LINK REL=StyleSheet HREF="main.css" TYPE="text/css" MEDIA=screen>

<body>
<h1> Welcome to H.E.A.R.T!</h1>

<style>

ul
{
list-style-type:none;
margin:0;
padding:0;
}
li
{
display:inline;
align:center;
}

</style>

<div class="horizontal">
<ul>
<li><h2><a href="index.html">Home</a></h2></li>
<li><h2><a href="registration.php">Register</a></h2></li>
<li><h2><a href="login.php">Log in</a></h2></li>
<li><h2><a href="about.html">About</a></h2></li>
<li><h2><a href="ourteam.html">Our Team</a></h2></li>
<li><h2><a href="contact.html">Contact</a></h2></li>
</ul>
</div>

						
<ul>
<form method='post' action ='registration.php'>
<table width='400' border='5' align='center'
<tr>
<td colspan='5' align='center'><h2>Register:</h2></td>
</tr>

<tr>
<td align='center'>Username:</td>
<td><input type='text' name='name' /></td></tr>
<tr>

<tr>
<td align='center'>Email:</td>
<td><input type='text' name='email' /></td>
</tr>

<td align='center'>Password:</td>
<td><input type='password' name='pass' /></td>
</tr>

<tr>
<td colspan='5' align='center'><input type='submit' name='submit'
value='Submit' /></td>
</tr>

</table>
</form>

<br>
<br>

<left><b>Already Registered?</b><br><a href='login.php'>Log in here</a></left>

<br>
<br>
        
</body>

<br>
<br>

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
      if(isset($_POST['submit']))
{
    $user_name = $_POST['name'];
   $user_pass = $_POST['pass'];
    $user_email = $_POST['email'];

if($user_name==''){
echo "<script>alert('Please enter your name!')</script>";
exit();
}

if($user_pass==''){
echo "<script>alert('Please enter your password!')</script>";
exit();
}


if($user_email==''){
echo "<script>alert('Please enter your email!')</script>";
exit();
}

$check_email = "select * from users where user_email='$user_email'";

$run = mysql_query($check_email);

if(mysql_num_rows($run)>0){

echo "<script>alert('Email $user_email is already registered for Online Academic Planner, please use a different email')</script>";
exit();
}

$query = "insert into users (user_name,user_pass,user_email) values 
('$user_name','$user_pass','$user_email')";
if(mysql_query($query)){

echo "<script>window.open('welcome.php','_self')</script>";
}

else {
echo "<script>alert('Email or password is incorrect')</script>";
}
}


?>
						
