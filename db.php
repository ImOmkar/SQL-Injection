<?php
   define('DB_HOST', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'attack');
   $db = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("db ! got");
?>
