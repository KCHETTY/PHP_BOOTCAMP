#!/usr/bin/php
<?php
	$array = array();

	if ($argc != 4)
		echo "Incorrect Parameters\n";
	else	
	{
		while (++$concat < $argc)
			array_push($array, trim($argv[$concat]));
		
		if (strcmp($array[1], "+") == 0)
			echo "$array[0]" + "$array[2]" . "\n";
		if (strcmp($array[1], "/") == 0)
			echo "$array[0]" / "$array[2]" . "\n";
		if (strcmp($array[1], "%") == 0)
			echo "$array[0]" % "$array[2]" . "\n";
		if (strcmp($array[1], "-") == 0)
			echo "$array[0]" - "$array[2]" . "\n";	
		if (strcmp($array[1], "*") == 0)
			echo "$array[0]" * "$array[2]" . "\n";	
	}
?>
