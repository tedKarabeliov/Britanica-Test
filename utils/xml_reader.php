<?php

class MyXmlReader {
	public function read_xml_string($xmlString) {
		// There were "<br/>" tags in the xml string which were breaking the parsing.
		// Fixed by removing the "<br/>" tags. This won't affect the data integrity.
		$xmlString = preg_replace("/<br\\\\>/", '', $xmlString);
		
		$data = new SimpleXMLElement($xmlString);
		
		return $data;
	}
}