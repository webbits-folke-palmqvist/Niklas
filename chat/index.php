<?php

session_start();
$_SESSION['user'] = (isset($GET['user']) === true) ? (int)$_GET['user'] : 0;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>AJAX Chat</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>

		<div class="chat">
			<div class="messages">
				<div class="message">
				</div>
			</div>
			<textarea class="entry" placeholder="Skriv här"></textarea>
		</div>



		<script src="js/chat.js"></script>
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	</body>	
</html>