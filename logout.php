<?php
	session_start();
	session_destroy();
	header('location: testfile1.php');
	?>