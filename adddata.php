<?php
// adddata.php
// add bookmark to database
token=$_REQUEST['token'];
if ($token == 'hogehoge'){
	//Create XML string and XML document using DOM
	$doc = new DomDocument('1.0');
	$doc->formatOutput = true;
	$pages = $doc->createElement('pages');
	$pages = $doc->appendChild($pages);

	//add <page> element to <pages>
	$page = $doc->createElement('page');
	$page = $pages->appendChild($page);
	
	//add <name> element to <page>
	$name = $doc->createElement('name');
	$name = $page->appendChild($name);
	$tname = $doc->createTextNode($_REQUEST['name']);
	$tname = $name->appendChild($tname);

	//add <uri> element to <page>
	$uri = $doc->createElement('name');
	$uri = $page->appendChild($uri);
	$turi = $doc->createTextNode($_REQUEST['uri']);
	$tuti = $uri->appendChild($turi);
	

}
?>
