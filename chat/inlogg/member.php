<?php

session_start();

if ($_SESSION['username']) {
	echo "Hej ".$_SESSION['username']."!<br><a href='logout.php'>logga ut</a>";
}
else
	die("<a href='index.html'>logga in</a>")



?>