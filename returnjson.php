<?php
// this is just testing file
// return json to client
if (isset($_REQUEST["token"])){
	$token = $_REQUEST["token"];
	
	if ($token == 'hogehoge'){
		$marks = array(
				array('url' => 'http://www.google.com','title' => 'Google'),
				array('url' => 'http://snb-tools.com','title' => 'SNB-Tools')
				);
		echo json_encode(array('bookmarks' => $marks));
	} else {
		echo json_encode(array('errors' => array(
			array('error' => 'Your Token is incorrect.')
			)));
	}
}
