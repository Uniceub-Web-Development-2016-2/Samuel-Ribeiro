<?php
	
	session_start();
	session_destroy();
	session_unset(['usuariohb']);
	session_unset(['senhahb']);

	header('Location: ../home.php');
	
?> 