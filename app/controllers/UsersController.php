<?php

class Users extends Controller
{

  /**
  * Loads the page with required data from database
  *
  * @return void
  */
  public function index(): void
  {

    $users = $this->loadModel('User');
    $allUsers = $users->getAllUsers();

    $data['page_title'] = 'Users';
    $data['all_users']  = $allUsers; 

    $this->view('pages/users', $data);
  }

}