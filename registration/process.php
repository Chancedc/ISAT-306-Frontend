<?php
      include_once('db.php');

 if(isset($_POST[username]) && isset($_POST[password]))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	 $sql = "INSERT INTO users('username','password') VALUES('$username', '$password')";
	if( mysql_query($sql) )
	{
		echo "Inserted Successfully";
	}
	else
	{
		   echo "Insertion Failed";
	}
	
	mysql_close($conn);
											   
}
else
{
	echo "Something went wrong on process.php";
}
?>