<?php

class Controller 
{
  public function view(string $view): void
  {
    if(file_exists('../app/views/' . $view . '.php'))
    {
      include '../app/views/' . $view . '.php';
    }else{
      include '../app/views/404.php';
    }
  }

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