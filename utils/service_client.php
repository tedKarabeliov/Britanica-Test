<?php

class Service_Client {
	
	private $wsdl;
	private $namespace;
	private $username;
	private $password;
	private $client;
	
	public function __construct($wsdl, $namespace, $username, $password) {
		$this->wsdl = $wsdl;
		$this->namespace = $namespace;
		$this->username = $username;
		$this->password = $password;
		$this->client = new SoapClient($this->wsdl);
	}
	
	public function get_training_groups($params) {
		$this->assign_auth_header();
		
		$trainingGroups = $this->client->__soapCall('GetTrainingGroups', array($params));
		
		return $trainingGroups->GetTrainingGroupsResult;
	}
	
	public function get_training_products($params) {
		$this->assign_auth_header();
		
		$trainingProducts = $this->client->__soapCall('GetTrainingProducts', array($params));
		
		return $trainingProducts->GetTrainingProductsResult;
	}
	
	private function assign_auth_header() {
		$authHeader = array(
				'Username' => $this->username,
				'Password' => $this->password
		);
		
		$header = new SoapHeader($this->namespace, 'AuthHeader', $authHeader);
		$this->client->__setSoapHeaders($header);
	}
}
