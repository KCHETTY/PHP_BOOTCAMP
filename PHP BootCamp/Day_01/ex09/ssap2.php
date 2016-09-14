#!/usr/bin/php 
<?php

	$alpha = array();	
	$num = array();
	$schar = array();

	if ($argc > 1)
	{
		while (++$count < $argc)
			$concat = $concat. " " .$argv[$count];
		$array = preg_split("/[\s,]+/", $concat);
		foreach ($array as $tmp)
		{
			if (!empty($tmp))
			{
				if (is_numeric($tmp))
					array_push($num, $tmp);	
				else if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $tmp))
					array_push($schar, $tmp);
				else
					array_push($alpha, $tmp);
			}
		}
		rsort($num);
		sort($schar);
		usort($alpha, 'strnatcasecmp');
		$result = array_merge($alpha, $num, $schar);
		foreach ($result as $tmp)
			echo "$tmp\n";
	}
?>
