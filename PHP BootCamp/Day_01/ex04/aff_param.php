#!/usr/bin/php 
<?php
	
	if ($argc == 1)
		echo "No Parameters...\n";
	else
	{		
		foreach ($argv as $tmp)
		{
			trim($tmp);
			if (strcmp($argv[0], $tmp) != 0)
				echo "$tmp\n";
		}	
	}

?>
