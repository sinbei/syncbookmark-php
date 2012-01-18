<?php
// this is just testing file
// return xml to client
if (isset($_REQUEST["token"])){
	$token = $_REQUEST["token"];
	
	if ($token == 'hogehoge'){
		//Creates XML string and XML document using DOM
		$doc = new DomDocument('1.0');
		$doc->formatOutput = true;
	
		//add root - <bookmark>
		$bookmark = $doc->createElement('bookmark');
		$bookmark = $doc->appendChild($bookmark);
	
		//add <page> element to <bookmark>
		$page = $doc->createElement('page');
		$page = $bookmark->appendChild($page);
	
		//add <name> element to <page>
		$name = $doc->createElement('name');
		$name = $page->appendChild($name);
	
		$tname = $doc->createTextNode('Google.com');
		$tname = $name->appendChild($tname);
	
		//add <uri> element to <page>
		$uri = $doc->createElement('uri');
		$uri = $page->appendChild($uri);
	
		$turi = $doc->createTextNode('http://www.google.com');
		$turi = $uri->appendChild($turi);
	
		//add <tag> element to <page>
		$tag = $doc->createElement('tag');
		$tag = $page->appendChild($tag);
	
		$ttag = $doc->createTextNode('TEST');
		$ttag = $tag->appendChild($ttag);
	
		//output XML
		echo $doc->saveXML()."\n";
	} else {
		//Creates XML string and XML document
		$doc = new DomDocument('1.0');
		$doc->formatOutput = true;

		//add root - <errors>
		$errors = $doc->createElement('errors');
		$errors = $doc->appendChild($errors);

		//add <error> element to <errors>
		$error = $doc->createElement('error');
		$error = $errors->appendChild($error);
		$terror = $doc->createTextNode('Your Token was incorrect.\n');
		$terror = $error->appendChild($tname);

		//output XML
		echo $doc->saveXML()."\n";
	}
}
