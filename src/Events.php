<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	public $name = ''
	public $param = [];
	public $user = [];
	public $priority = '';
	public $retries = '';
	public $delay = '';
	public $host = '';

	function __construct($name = '') {
    	parent::__construct();

    	$this->name = $name;

    	$this->load->helper('url');		
		$this->load->model('Users_model');
	}

	public function setName($name = '') {
		$this->name = $name;
	}

	public function getName($name = '') {
		return $this->name;
	}

	public function setParam($param = []) {
		$this->param = $param;
	}

	public function getParam($param = []) {
		return $this->param;
	}

	public function setUser($user = []) {
		$this->user = $user;

	}

	public function getUser($user = []) {
		return $this->user;
	}

	public function setPriority($priority = '') {
		$this->name = $priority;
	}

	public function getPriority($priority = '') {
		return $this->priority;
	}

	public function setRetries($retries = '') {
		$this->name = $retries;
	}

	public function getRetries($retries = '') {
		return $this->retries;
	}

	public function setDelay($delay = '') {
		$this->name = $delay;
	}

	public function getDelay($delay = '') {
		return $this->delay;
	}

	public function setHost($host = '') {
		$this->name = $host;
	}

	public function getHost($host = '') {
		return $this->host;
	}

	public function makeJson() {
			$jsonData['event'] = [
			'name' => $this->getName(),
			'params' => $this->getParam(),
			'user' => $this->getUser(),
			'priority' => $this->getPriority(),
			'Retries' => $this->getRetries(),
			'delay' => $this->getDelay()
		];
		
		return json_encode($jsonData);
	}

	public function send () {
		$jsonData = $this->makeJson();

	}

	public function request ($url = '', $postData = []) {

		$postData = array(
    		'login' => 'acogneau',
    		'pwd' => 'secretpassword',
		);

		$url = "http://www.google.co.in";
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		//curl_setopt($curl, CURLOPT_POST, true);
		//curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
		//curl_setopt($cSession,CURLOPT_HEADER, false); 
		$result = curl_exec($curl);
		//$info = curl_getinfo($curl);
		curl_close($curl);
		print $result;
	}	
	
}

	$pdata = [
		'email' => 'developer.spandan@gmail.com',
		'password' => '123456'
	];

	$userData = [
		'email' => 'developer.spandan@gmail.com',
		'phone' => '+918400065274',
		'deviceID' => '6df87bdf87vdf87bvfdiubv98dfvdfh98vhdfobh'
	];
	
?>
