<?php
	session_start([
    'cookie_lifetime' => 60, /*cookie lifetime 1 minute*/
]);
	if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != true) {
      header('Location: login.php');
    }
	
?>