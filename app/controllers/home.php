<?php

class Home extends Controller
{

  public function index(): void
  {
    $this->view('pages/home');
  }

}