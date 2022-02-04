<?php
/**
 * Our base controller inherited by child controllers
 */
class Controller 
{
  /**
   * Includes view and provides data for it
   * 
   * @param string
   * 
   * @param array
   * 
   * @return void
   */
  public function view(string $view, array $data = []): void
  {
    if(file_exists('../app/views/' . $view . '.php'))
    {
      include '../app/views/' . $view . '.php';
    }else{
      include '../app/views/404.php';
    }
  }
  /**
   * Includes model and instantiates it
   * 
   * @param string
   * 
   * @return object|null
   */
  public function loadModel(string $model): ?object
  {
    if(file_exists('../app/models/' . $model . '.php'))
    {
      include '../app/models/' . $model . '.php';
      return $model = new $model();
    }

    return null;

  }


}