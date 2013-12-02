Lib Curl
================

A simple class for wrapping curl

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
