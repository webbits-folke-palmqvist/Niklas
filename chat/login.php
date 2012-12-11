<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)
{

$connect = mysql_connect("localhost","root","root") or die("NO!");
mysql_select_db("phplogin") or die("Wrong!");

$query = mysql_query("SELECT * FROM users WHERE username='$username'");
$numrows = mysql_num_rows($query);


}
else
	die("Skriv!");

?>