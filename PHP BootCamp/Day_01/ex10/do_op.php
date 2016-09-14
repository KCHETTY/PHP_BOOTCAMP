#!/usr/bin/php
<?php
	$array = array();

	if ($argc != 4)
		echo "Missing Arguments...\n";
	else
	{
		while (++$concat < $argc)
		{
			echo "TEST $argv[$concat]";
			array_push($array, trim($argv[$concat]));
		}
		print_r($array);
		if (strcmp($array[1], "+") == 0)
			echo "$array[0]" + "$array[2]\n";
		if (strcmp($array[1], "/") == 0)
			echo "$array[0]" / "$array[2]\n";
		if (strcmp($array[1], "%") == 0)
			echo "$array[0]" % "$array[2]\n";
		if (strcmp($array[1], "-") == 0)
			echo "$array[0]" - "$array[2]\n";	
		if (strcmp($array[1], "*") == 0)
			echo "$array[0]" * "$array[2]\n";	
	}
?>
