#!/usr/bin/php
<?php
	$str = "";

	if ($argc == 1)
		echo "Missing Arguments...\n";
	else
	{
		$array = preg_split("/[\s,]+/", $argv[1]);
		$day = trim($array[0]);
		date_default_timezone_set("europe/paris");
		$Month = (trim($array[2]));

		switch ($day) {
		case "Lundi":
			$str .= "Monday ";
			break ;
		case "Mardi":
			$str .= "Tuesday ";
			break ;
		case "Mercredi":
			$str .= "Wednesday ";
			break ;
		case "Jeudi":
			$str .= "Thursday ";
			break ;
		case "Vendredi":
			$str .= "Friday ";
			break ;
		case "Samedi":
			$str .= "Saturday ";
			break ;
		case "Dimanche":	
			$str .= "Sunday ";
		default:
			echo "Missing Day...\n";
		}

		$str .= $array[1];
		switch ($Month) {
		case "Janvier":
			$str .= " January ";
			break ;
		case "Fevrier":
			$str .= " February ";
			break ;
		case "Mars":
			$str .= " March ";
			break ;
		case "Avril":
			$str .= " April ";
			break ;
		case "Mai":
			$str .= " May ";
			break ;
		case "Juin":
			$str .= " June ";
			break ;
		case "Juillet":
			$str .= " July ";
		case "Aout":
			$str .= " August ";
			break ;
		case "Septembre":
			$str .= " September ";
			break ;
		case "Octobre":
			$str .= " October ";
			break ;
		case "Novembre":
			$str .= " November ";
			break ;
		case "Decembre":
			$str .= " December ";
			break ;
		default:
			echo "Missing Month...\n";
		}
		$str .= $array[3]. " ". $array[4];
		$int = strtotime($str);
		echo "$int\n";
	}
?>
