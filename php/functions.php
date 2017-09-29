<?php

/**
 * Reads each line in the provided services file and generates html links with the href being each line.
 * this then prints it out to stdout which shows it in the HTML. A new line is added after every link that is outputted.
 */
function printServices( $services_file )
{
	$file = fopen($services_file, "r") or exit("Unable to open file ".$services_file);
	while( !feof($file) )
	{
		$line = fgets($file);
		$output = sprintf("<a href='%s'>%s</a>",$line,$line);
		$newline = "<br />";
		echo $output.$newline;
	}	
		fclose($file);
}



?>
