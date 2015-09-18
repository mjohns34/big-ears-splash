<?php
/*
 *	Gets images in slider directory and formats as HTML list
 *		@author Miranda Johnson miranda.j.johnson@gmail.com
 *		@date 09/17/2015
*/

$files = glob('assets/images/slider/*.*');
$output = '';

if ($files) {
	$output = '<ul>';
	foreach ($files as $file) {
		$output .= '<li><img src="' . $file . '" alt="' . $file . '" /></li>';
	}
	$output .= '</ul>';
} else {
	$modx->log(modX::LOG_LEVEL_DEBUG, '[getSliderImages] No files found in directory');
}

return $output;