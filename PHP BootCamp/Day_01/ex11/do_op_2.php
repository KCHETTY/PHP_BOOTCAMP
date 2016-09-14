#!/usr/bin/php
<?php

	function get_op($str)
	{
			if (strpos($str, "%") != false)
				return ("%");
			else if (strpos($str, "*") != false)
				return ("*");
			else if (strpos($str, "/") != false)
				return ("/");
			else if (strpos($str, "+") != false)
				return ("+");
			else if (strpos($str, "-") != false)
				return ("-");
			else
				return (false);
	}

	$array = array();

	if ($argc != 2)
		echo "Incorrect Parameters\n";
	else
	{	
		$op = get_op($argv[1]);
		$array = explode($op, $argv[1]);

		if ($op != false)
		{
			if (count($array) == 2)
			{
				if (!is_numeric(trim($array[0])))
					echo "Syntax Error\n";
				else if (!is_numeric(trim($array[1])))
					echo "Syntax Error\n";
				else
				{
					if (strcmp($op, "+") == 0)
						echo "$array[0]" + "$array[1]". "\n";
					if (strcmp($op, "-") == 0)
						echo "$array[0]" - "$array[1]". "\n";
					if (strcmp($op, "%") == 0)
						echo "$array[0]" % "$array[1]". "\n";
					if (strcmp($op, "*") == 0)
						echo "$array[0]" * "$array[1]". "\n";
					if (strcmp($op, "/") == 0)
						echo "$array[0]" / "$array[1]". "\n";
				}
			}
			else if (count($array) != 2)
				echo "Incorrect Parameters\n";
			else
				echo "Syntax Error\n";	
		}
		else
			echo "Syntax Error\n";
	}
?>
