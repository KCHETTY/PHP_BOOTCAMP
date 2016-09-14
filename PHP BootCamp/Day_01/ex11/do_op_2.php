#!/usr/bin/php
<?php
	
	$array = array();

	if ($argc != 2)
		echo "Missing Arguments..\n";
	else
	{	
		$array = preg_split("/[\s,]+/", $argv[1]);
		print_r($array);
		
		if (count($array) == 3) 
		{
			if (!is_numeric(trim($array[0])))
				echo "Syntax Error\n";
			else if (!is_numeric(trim($array[2])))
				echo "Syntax Error\n";
			else if (preg_match('/[\'^£$&()}{@#~?><>,|=_¬]/', trim($array[1])))
				echo "Syntax Error\n";
			else
			{
				if (strcmp($array[1], "+") == 0)
					echo "$array[0]" + "$array[2]\n";
				if (strcmp($array[1], "-") == 0)
					echo "$array[0]" - "$array[2]\n";
				if (strcmp($array[1], "%") == 0)
					echo "$array[0]" % "$array[2]\n";
				if (strcmp($array[1], "*") == 0)
					echo "$array[0]" * "$array[2]\n";
				if (strcmp($array[1], "/") == 0)
					echo "$array[0]" / "$array[2]\n";
			}
		}
		else
			echo "Too many arguments.\n";	
	}
?>
