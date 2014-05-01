<?php

/**
 * A simple wrapper class for making cURL requests in PHP
 *
 * @author André Figueira
 * @package Curl\Request
 * @version 0.5
 *
 **/

namespace Curl;

class Request
{

    /** @var string The result from the curl call */
    public $result;

    /** @var string If any errors the error number will be stored here */
    public $errorNumber;

    /** @var string If any errors the error message will be stored here */
    public $errorMessage;

    /** @var array Stores the information from the curl call response */
    public $info;

    /** @var resource The curl resource */
    public $c;

    /**
     * Creates an instance of the curl resource and assigns it to a property
     */
    public function __construct()
    {

        $this->c = curl_init();

    }

    /**
     * Allows the user to set a curl option and allows chaining
     *
     * @param $option
     * @param $value
     * @return $this
     */
    public function set($option, $value)
    {

        curl_setopt($this->c, $option, $value);

        return $this;

    }

    /**
     * Executes the curl request and returns the result of the request
     *
     * @return mixed
     */
    public function exec()
    {

        $this->result = curl_exec($this->c);
        $this->errorNumber = curl_errno($this->c);
        $this->errorMessage = curl_error($this->c);
        $this->info = curl_getinfo($this->c);

        $this->close();

        return $this->result;

    }

    /**
     * Closes the curl connection
     */
    public function close()
    {

        curl_close($this->c);

    }

}