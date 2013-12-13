<?php

/**
* A simple wrapper class for making cURL requests in PHP
* 
* @author André Figueira
* @package Curl\Request
* @version 0.3
*
**/

namespace Curl;

class Request
{

	public function __construct($url = '')
	{
	
		$this->init();
		$this->set(CURLOPT_URL, $url);
		
	}
	
	public function init()
	{
		
		$this->c = curl_init();
		
	}
	
	public function set($option, $value)
	{
		
		curl_setopt($this->c, $option, $value);
		
	}
	
	public function exec()
	{
		
		$this->result = curl_exec($this->c);
		
		$this->close();
		
		return $this->result;
		
	}
	
	public function close()
	{
		
		curl_close($this->c);
		
	}

}