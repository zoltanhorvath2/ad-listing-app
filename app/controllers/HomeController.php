<?php

class Home extends Controller
{

  /**
  * Loads the page with required data
  *
  * @return void
  */
  public function index(): void
  {

    $data['page_title'] = 'Home';

    $this->view('pages/home', $data);
  }

}