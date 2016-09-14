#!/usr/bin/php
<?php
	if ($argc == 1)
		echo "Missing Arguments...\n";
	else
	{
		$count = 2;
		while ($count < count($argv))
		{
			$array = explode(":", $argv[$count]);
			if (strcmp($argv[1], $array[0]) == 0)
			{		
				echo "$array[1]\n";
				break ;
			}
			$count++;
		}
	}
?>
