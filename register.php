<?PHP
require_once("membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.html");
   }
}

?>

<!DOCTYPE html>
<head>
<LINK REL=StyleSheet HREF="main.css" TYPE="text/css" MEDIA=screen>
    <script type='text/javascript' src='gen_validatorv31.js'></script>
    <script src="pwdwidget.js" type="text/javascript"></script>      
<title>H.E.A.R.T</title>
<head profile="H.E.A.R.T">
<link rel="icon" type="image/png" href="http://openclipart.org/image/800px/svg_to_png/135571/OCAL_Favorites_Icon_Selected_Green.png">
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
<li><h2><a href="register.php">Register</a></h2></li>
<li><h2><a href="login.php">Log In</a></h2></li>
<li><h2><a href="about.html">About</a></h2></li>
<li><h2><a href="ourteam.html">Our Team</a></h2></li>
<li><h2><a href="contact.html">Contact</a></h2></li>
</ul>
</div>

<body>

<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<h2>Register</h2>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='username' >Username:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container' style='height:80px;'>
    <label for='password' >Password:</label><br/>
    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
    <noscript>
    <input type='password' name='password' id='password' maxlength="50" />
    </noscript>    
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>
<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
</fieldset>
</form>

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide a username");
    
    frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>

<!--
Form Code End (see html-form-guide.com for more info.)
-->

</section><!--/ #content -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>		
	
<br>
<br>
<br>
<br>

</section><!--/ #content -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>		
	
<!--these links below are the only way to display the images in the circles on the Our Team page -->
<!--there doesnt seem to be a way to change the properties of the register, log in, about and contact pages either-->

<link rel='stylesheet' id='tmm_theme_style-css'  href='http://passportparking.com/wp-content/themes/axioma/style.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_skeleton-css'  href='http://passportparking.com/wp-content/themes/axioma/css/skeleton.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_layout-css'  href='http://passportparking.com/wp-content/themes/axioma/css/layout.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_custom1-css'  href='http://passportparking.com/wp-content/themes/axioma/css/custom1.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_custom2-css'  href='http://passportparking.com/wp-content/themes/axioma/css/custom2.css?ver=3.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='tmm_fancybox-css'  href='http://passportparking.com/wp-content/themes/axioma/js/fancybox/jquery.fancybox.css?ver=3.7.1' type='text/css' media='all' />
</html>
