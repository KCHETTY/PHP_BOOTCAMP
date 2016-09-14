#!/usr/bin/php
<?php	
	function ft_split($string)
	{
		$tmp_array = preg_split("/[\s,]+/", $string);
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
