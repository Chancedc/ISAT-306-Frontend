<?php

mysql_connect("mysql16.000webhost.com","a8727958_isat306", "Liberty22") or die(mysql_error());

mysql_select_db("a8727958_isat306") or die(mysql_error());

if ($_POST['form_submitted'] == '1') {
##User is registering, insert data until we can activate it

$activationKey =  mt_rand() . mt_rand() . mt_rand() . mt_rand() . mt_rand();
$userIname = mysql_real_escape_string($_POST[user_name]);
$user_pass = mysql_real_escape_string($_POST[user_pass]);

$email = mysql_real_escape_string($_POST[email]);

$sql="INSERT INTO users (user_name, user_pass, user_email, activationkey, status) VALUES ('$user_name', '$user_pass', '$user_email', '$activationKey', 'verify')";

if (!mysql_query($sql))

  {

  die('Error: ' . mysql_error());

  }

echo "An email has been sent to $_POST[email] with an activation key, please check your mail to complete registration. You may want to check your spam folder for the verification email. ";

##Send activation Email

$to      = $_POST[email];

$subject = "H.E.A.R.T Registration";

$message = "Welcome to H.E.A.R.T! You, or someone using your email address, has completed registration at isat306.com for H.E.A.R.T systems.
You can complete registration by logging into your account by clicking the following link http://www.isat306.com/login.php?$activationKeyrr If you did not intend to receive this email, please ignore it. Regards, isat306.com";


$headers = 'From: isat306@yahoo.com' . "Registration" .

    'Reply-To: isat306@yahoo.com' . "Registration" .

    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

} else {

##User isn't registering, check verify code and change activation code to null, status to activated on success

$queryString = $_SERVER['QUERY_STRING'];

$query = "SELECT * FROM users"; 

$result = mysql_query($query) or die(mysql_error());

  while($row = mysql_fetch_array($result)){

    if ($queryString == $row["activationkey"]){

       echo "Welcome" . $row["user_name"] . "";

       $sql="UPDATE users SET activationkey = '', status='activated' WHERE (id = $row[id])";

       if (!mysql_query($sql))

  {

        die('Error: ' . mysql_error());

  }

    }

  }

}



if ($_POST['form_submitted'] == '1') {
##User is registering, insert data until ;we can activate it

$activationKey =  mt_rand() . mt_rand() . mt_rand() . mt_rand() . mt_rand();

$sql="INSERT INTO users (status, user_name, user_pass, user_email, activationkey)

VALUES

('$_POST[user_name]', '$_POST[user_pass]', '$_POST[user_email]','$activationKey', 'verify')";

if (!mysql_query($sql))

  {

  die('Error: ' . mysql_error());

  }

} else {

}

?>
