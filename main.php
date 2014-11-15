<?php

require_once 'config/config.php';
require_once 'utils/service_client.php';
require_once 'utils/xml_reader.php';

$wsdl = WSDL_URL;
$namespace = SERVICE_NAMESPACE;
$username = USERNAME;
$password = PASSWORD;

$service = new Service_Client($wsdl, $namespace, $username, $password);

$params = array("year" => "2014", "departmentId" => "21", "trainingProduct" => "E_FCE");
$trainingGroupsXmlString = $service->get_training_groups($params);

$params = array("year" => "2014/2015", "educationType" => "EXAM_ONLINE");
$trainingProductsXmlString = $service->get_training_products($params);

$xmlReader = new MyXmlReader();

$groupsData = $xmlReader->read_xml_string($trainingGroupsXmlString);
$productsData = $xmlReader->read_xml_string($trainingProductsXmlString);












