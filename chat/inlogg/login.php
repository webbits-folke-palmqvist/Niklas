<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)
{

$connect = mysql_connect("localhost","root","root") or die("NO!");
mysql_select_db("phplogin") or die("Wrong!");

$query = mysql_query("SELECT * FROM users WHERE username='$username'");

$numrows = mysql_num_rows($query);

if ($numrows!=0) {

	while ($row = mysql_fetch_assoc($query)) 
	{
		$dbusername = $row ['username'];
		$dbpassword = $row ['password'];
		# code...
	}
	if ($username==$dbusername&&$password==$dbpassword) 
	{
		echo "grattis :D <a href='member.php'> hemlig knapp!</a>";
		$_SESSION['username']=$username;
	}
	else
		echo "Feeeeel!!";
}
else
	die("$username is not a user");



}
else
	die("Skriv!");

?>