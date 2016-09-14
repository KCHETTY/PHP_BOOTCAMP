#!/usr/bin/php
<?php

while(1)
{
	echo "Please enter a number: ";
	$fpointer = fopen("php://stdin","r");
	$r_line = trim(fgets($fpointer));
	
	if (feof($fpointer))
	{
		echo "\n";
		break ;
	}
	else if (is_numeric($r_line) == true)
	{
		if ($r_line % 2 == 0)
			echo "The Number: $r_line is even.\n";
		else if ($r_line % 2 != 0)
			echo "The Number: $r_line is odd.\n";
	}
	else
		echo "$r_line is not a number.\n";
}
?>
