<?php

include 'lib/bootstrap.php';

$curl = new \Curl\Request();

$curl->set(CURLOPT_URL, 'http://gdata.youtube.com/feeds/api/standardfeeds/most_popular?v=2&alt=json')
    ->set(CURLOPT_CONNECTTIMEOUT, 10)
    ->exec();