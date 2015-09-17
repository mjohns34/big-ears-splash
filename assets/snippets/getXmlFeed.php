<?php
$file = file_get_contents($url);

if ($xml = simplexml_load_string($file, null, LIBXML_NOCDATA)) {
	$items = $xml->xpath("//item");
	
	foreach ($items as $i => $item) {
		if ($i >= $num) { break; }
		if (strlen($item->description) > 90) {
			$description = '<p>' . trim(preg_replace('/^(.{' . 90 . ',}? ).*$/is', '$1', strip_tags($item->description))) . '...</p>';
		} else {
			$description = $item->description;
		}
		
		$output .= '<li><h3><a href="' . $item->link . '" target="_blank">' . $item->title . '</a></h3>' . $description . '</li>';
	}
    
} 
return $output;