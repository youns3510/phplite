<?php

/*
* App Core Class
* Create URL & loads core controller
* URL FORMAT - /controller/method/params
*/


class Core{
  protected $currentController = 'Pages';
  protected $currentMethod = 'index.php';
  protected $params = [];

public function __construct()
{
  $this->getUrl();
}

  public function getUrl()
  {
    echo $_GET['url'];
  //  if(){}
  }
}

