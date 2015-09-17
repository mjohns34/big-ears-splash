<?php
$file = file_get_contents($url);

if ($xml = simplexml_load_string($file)) {
	$items = $xml->xpath("//item");
	
	foreach ($items as $i => $item) {
		if ($i >= 3) { break; }
		$output .= print_r($item, 1);
	}
	
} else {
	$output = 'false';
}
return $output;