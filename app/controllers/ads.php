<?php

class Ads extends Controller
{

  public function index(): void
  {
    $this->view('pages/advertisements');
  }

}