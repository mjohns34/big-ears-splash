<?php
/*
 *	Processes the form data from email signup form, inserts into database & sends email
 *		@author Miranda Johnson miranda.j.johnson@gmail.com
 *		@date 09/17/2015
*/

// Load ModX libraries
require_once '../../config.core.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
$modx = new modX();
$modx->initialize('web');
$modx->getService('error','error.modError', '', '');

try {
	if ( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
		$email = $_POST['email'];
		$time = date('Y-m-d H:i:s', time());
		
		try {
			// Custom DB credentials are defined in config.core.php
			$db = new PDO('mysql:host=' . MODX_SIGNUP_DB_HOST . ';dbname=' . MODX_SIGNUP_DB_NAME, MODX_SIGNUP_DB_USER, MODX_SIGNUP_DB_PASS);
			
			$insert = $db->prepare('INSERT INTO signups (email, timestamp) VALUES (?, ?)');
			$insert->bindParam(1, $email);
			$insert->bindParam(2, $time);
			if ($insert->execute()) {
				// Send email
				mail('miranda.j.johnson@gmail.com', 'New Email Signup', 'New email signup from ' . $email . ' at ' . $time);
				
				// Return success to the JS file
				header("Content-type: application/json");
				echo json_encode('success');
			} else {
				// Return failure to the JS file
				header("Content-type: application/json");
				echo json_encode('failure');
			}
		} catch (PDOException $e) {
			$modx->log(modX::LOG_LEVEL_ERROR, $e->getMessage());
		}
	} else {
		throw new Exception('[formProcessor] Invalid email address provided');
	}
} catch (Exception $e) {
	$modx->log(modX::LOG_LEVEL_ERROR, $e->getMessage());
} 