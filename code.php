<?php 
$xml_header = '<?xml version="1.0" encoding="UTF-8"?><Orders></Orders>';
$xml = new SimpleXMLElement($xml_header);
$Order = $xml->addChild('Order');
$Order->addChild('DateTime', date("d/m/Y h.iA"));
Header('Content-type: text/xml');
$xml->asXML();//path to save xml 