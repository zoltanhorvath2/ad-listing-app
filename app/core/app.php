<?php
/**
 * This class is responsible for loading the required controller's required method based on pretty url.
 * It is also could provide parameters for the methods
 */

class App
{

  /**
  * Stores the required controller name or instance
  *
  * @var string|object
  */
  private $controller = 'home';
  /**
  * Stores the required method name
  *
  * @var string
  */
  private string $method = 'index';
  /**
  * Stores the required parameters
  *
  * @var array
  */
  private array $params = [];
  /**
   * The constructor includes and instantiates the required controller or the default set in
   * $controller property and calls the required method with optional parameters
   */
  public function __construct()
  {
    $url = $this->getURL();
    if(file_exists('../app/controllers/' . strtolower($url[0]) . 'Controller.php'))
    {
      $this->controller = strtolower($url[0]);
      unset($url[0]);
    }
    require '../app/controllers/' . $this->controller . 'Controller.php';
    $this->controller = new $this->controller;

    if(isset($url[1]))
    {
      if(method_exists($this->controller, $url[1]))
      {
        $this->method = strtolower($url[1]);
        unset($url[1]);
      }
    }
    $this->params = array_values($url);

    call_user_func_array([$this->controller, $this->method],$this->params);

  }
  /**
   * This method trims and sanitizes the provided URL 
   * 
   * @return array
   */
  private function getURL(): array
  {
    $url = isset($_GET['url']) ? $_GET['url'] : $_GET['url'] = 'home';
    return explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));
  }

}

