<?php

class Ads extends Controller
{

  public function index(): void
  {

    $ads = $this->loadModel('Ad');
    $allAds = $ads->getAllAds();

    $data['page_title'] = 'Ads';
    $data['all_ads'] = $allAds;

    $this->view('pages/advertisements', $data);
  }

}