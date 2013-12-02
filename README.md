Lib Curl
================

A simple class for wrapping curl

#Install with Composer

    {
        "require": {
            "lib/curl": "0.2"
        }
    }

#Usage

    <?php
    
    use Curl\Request;
    
    $curl = new Request();
    
    $curl->url = 'http://www.somewebsite.com/';
    $curl->post = array(
      'username' => 'admin',
      'password' => 'derp'
    );
    
    $curl->timeout = 400;
    
    $result = $curl->execute();
  
    var_dump($result);
