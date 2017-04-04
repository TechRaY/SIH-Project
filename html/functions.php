<?php

	function render($template, $values = [])
	{
		if (file_exists("$template"))
		{
			extract($values);

			require("adminheader.php");

			require("$template");

			require("adminfooter.php");
		}
		else
		{
			trigger_error("Invalid template: $template", E_USER_ERROR);
		}
	}



?>