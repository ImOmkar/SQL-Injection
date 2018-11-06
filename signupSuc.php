<?php

include 'db.php';


function NewUser(mysqli $db)
{
	#$name = $_POST['name'];
	$email = $_POST['email'];
	$password =  $_POST['password'];
	$query = "INSERT INTO user (email,password) VALUES ('$email','$password')";
	$result = mysqli_query($db,$query) or die(mysql_error());

	//$result=mysqli_query($db,$query);
	if($result)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
	else
	{
	echo "failed";
	}
}
NewUser($db);

?>

<h1> signup status </h1>
<h3><a href="index.php"> GO TO LOGIN PAGE </a></h3>


