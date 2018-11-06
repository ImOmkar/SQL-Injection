<html>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h2> SIMPLE WEB-PAGE TO CHECK SQL INJECTION </h2><br><br>
</div>

<?php
include 'db.php';

function NewUser(mysqli $db)
{
	#$name = $_POST['name'];
	$email = $_GET['email'];
	$password =  $_GET['password'];
	#$query = "SELECT * FROM User WHERE email='abhi@gmail.com' OR 1=1 AND password=' 'or 1=1'" or die(mysql_error());
	#$query = "SELECT * FROM User WHERE email='$email' AND password='$password'" or die(mysql_error());

	#SQL works for below code
	#$query = "SELECT * FROM User WHERE email='' or 1=1" or die(mysql_error());

	#$query = "SELECT * FROM User WHERE email='' or 1=1;#'";
	$query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($db,$query) or die(mysql_error());
	$count=mysqli_num_rows($result);
	if($count==1)
	{
	echo "Login Successful";
	}
	else
	{
	echo "Login failed";
	}
	#echo $result;
	while ($row = mysqli_fetch_assoc($result))
 {
    echo $row['email']. "," ;
	echo $row['password'] . ",";
	
 }
}

NewUser($db);
?>

<h3><a href="index.php"> Back </a></h3>




</body>
</html> 
