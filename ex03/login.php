<?php
	session_start();
	if ($_GET['login'] && $_GET['passwd'] && include 'auth.php')
	{
		echo "OK\n";
		$_SESSION['loggued_on_user'] = $_GET['login'];
    }
	else if (!($_GET['login'] && $_GET['passwd']))
	    echo "ERROR\n";
		
?>