<?php

class Ads extends Controller
{
  
  /**
  * Loads the page with required data from database
  *
  * @return void
  */
  public function index(): void
  {

    $ads = $this->loadModel('Ad');
    $allAds = $ads->getAllAds();

    $data['page_title'] = 'Ads';
    $data['all_ads'] = $allAds;

    $this->view('pages/advertisements', $data);
  }

}