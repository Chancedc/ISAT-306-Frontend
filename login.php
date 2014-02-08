<?php
session_start();
?>

<!DOCTYPE html>

<head>
<title>H.E.A.R.T</title>

<LINK REL=StyleSheet HREF="main.css" TYPE="text/css" MEDIA=screen>

<h1> Welcome to H.E.A.R.T!</h1> 

<style>

ul
{
list-style-type:none;
margin:0;
padding:0;
align:left;
}

li
{
display:inline;
align:center;
}

h4
{
align:justify;
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

<link rel="icon" 
      type="image/png" 
      href="http://openclipart.org/image/800px/svg_to_png/135571/OCAL_Favorites_Icon_Selected_Green.png">
							
<ul>
<form method='post' action ='login.php'>
<table width='400' border='5' align='center'
<tr>
<td colspan='5' align='center'><h2>Login:</h2></td>
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
