#!/usr/bin/php 
<?php
	
	$concat = "";
	$count = 0;
	$array = array();
	
	if ($argc > 1)
	{
		while (++$count < $argc)
			$concat = $concat. " " .$argv[$count];
		$array = explode(" ", $concat);
		sort($array);
		foreach ($array as $tmp)
		{
			if (!empty($tmp))
			{
				$tmp = trim($tmp);	
				echo "$tmp\n";
			}
		}
		unset($tmp);
	}
?>
