<?php
/*
 *	Parses XML feed and formats as HTML list
 *		@author Miranda Johnson miranda.j.johnson@gmail.com
 *		@date 09/17/2015
 *		@params:	$url (string) - XML feed URL
 *					$num (int) - Number of items to include in output
*/

$file = file_get_contents($url);

if ($xml = simplexml_load_string($file, null, LIBXML_NOCDATA)) {
	$items = $xml->xpath("//item");
	
	foreach ($items as $i => $item) {
		if ($i >= $num) { break; }
		if (strlen($item->description) > 90) {
			// Strip out HTML and truncate the description to 90 chars; the regex ensures that the excerpt isn't cut off in the middle of a word
			$description = '<p>' . trim(preg_replace('/^(.{' . 90 . ',}? ).*$/is', '$1', strip_tags($item->description))) . '...</p>';
		} else {
			$description = $item->description;
		}
		
		$output .= '<li><h3><a href="' . $item->link . '" target="_blank">' . $item->title . '</a></h3>' . $description . '</li>';
	}
    
} 
return $output;
return;
