<?php

if (isset($_GET['logout'])) {
	session_start();
	session_unset();
	session_destroy();
    header("Location:../admin.php?err=welcome");
     	
	}

?>