<?php

class Ads extends Controller
{

  public function index(): void
  {

    $data['page_title'] = 'Ads';

    $this->view('pages/advertisements', $data);
  }

}