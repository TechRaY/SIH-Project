<?php
	session_start();

	require("functions.php");

	render("adminhome.php", ["title" => "Home"] );
	
?>