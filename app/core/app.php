<?php

class App
{
  public function __construct()
  {
    $url = $this->getURL();

  }

  private function getURL(): array
  {
    return explode('/', $_GET['url']);
  }

}

