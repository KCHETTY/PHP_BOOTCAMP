#!/usr/bin/php
<?php	
	function ft_split($string)
	{
		$tmp_array = explode(" ", $string);
		sort($tmp_array);

		$array = array();
		foreach($tmp_array as $tmp)
		{
			if (!empty($tmp))
				array_push($array, $tmp);	
		}
		unset($tmp);
		return ($array);	
	}
?>
