<?php

class Home extends Controller
{

  public function index(): void
  {

    $data['page_title'] = 'Home';

    $this->view('pages/home', $data);
  }

}