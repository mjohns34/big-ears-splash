<?php
require_once '../../config.core.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
$modx = new modX();
$modx->initialize('web');
$modx->getService('error','error.modError', '', '');

try {
	if ( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
		$email = $_POST['email'];
/*
		$table = $modx->getFullTableName('signups');
		$fields = array(
			'email' => $email,
			'timestamp' => time()
		);
		$modx->exec('INSERT INTO ' . $table . ' (email, timestamp) VALUES (' . $email . ', ' . time());
*/
		try {
			$db = new PDO('mysql:host=localhost;dbname=big_ears_splash_signups', 'root', 'root');
			$insert = $db->prepare('INSERT INTO signups (email, timestamp) VALUES (?, ?)');
			$insert->bindParam(1, $email);
			$insert->bindParam(2, date('Y-m-d H:i:s', time()));
			if ($insert->execute()) {
				header("Content-type: application/json");
				echo json_encode('success');
			} else {
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