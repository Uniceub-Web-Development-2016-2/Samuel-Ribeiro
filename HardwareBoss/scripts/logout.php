<?php
	
	session_start();
	session_destroy();
	session_unset(['usuariohb']);
	session_unset(['permissao']);

	header('Location: ../index.php');
	
?> 