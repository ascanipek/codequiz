<?php

$dbhost = 'localhost';

$dbuser = '...';

$dbpass = '...';

$dbname = '...';

$db = mysql_connect($dbhost,$dbuser,$dbpass) or die ("Can not connect server!");

mysql_select_db($dbname,$db) or die ('Can not select db');
mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET CHARACTER SET utf8_general_ci");  

?>