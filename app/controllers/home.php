<?php

class Home 
{

  public function index(): void
  {
    $this->view('home');
  }

  public function view(string $view): void
  {
    if(file_exists('../app/views/' . $view . '.php'))
    {
      include '../app/views/' . $view . '.php';
    }else{
      include '../app/views/404.php';
    }
  }

}