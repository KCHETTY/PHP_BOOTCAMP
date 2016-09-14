#!/usr/bin/php 
<?php
	
	if ($argc > 1)
	{
		foreach ($argv as $tmp)
		{
			trim($tmp);
			if (strcmp($argv[0], $tmp) != 0)
				echo "$tmp\n";
		}	
	}

?>
