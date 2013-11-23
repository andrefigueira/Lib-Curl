<?php

require_once dirname(__DIR__) . '/lib/bootstrap.php';

use Curl\Request;

$request = new Request('https://public-api.wordpress.com/rest/v1/sites/andrefigueiracom.wordpress.com/posts/');

$request->set(CURLOPT_RETURNTRANSFER, true);

var_dump(json_decode($request->exec()));