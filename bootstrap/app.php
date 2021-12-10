<?php

use My_MVC\Bootstrap\App;

class Application
{
  /**
   * Application constructor 
   */
  private function __construct()
  {
  }

  /**
   * run the application
   * @return void
   * 
   */
  public static function run()
  {

    /**
     * define root path
     */
    define('ROOT', realpath(__DIR__ . "/.."));
    /**
     * define directory seprator
     */
    define("DS", DIRECTORY_SEPARATOR);

    /**
     * Run the Application
     */

    App::run();
  }
}
