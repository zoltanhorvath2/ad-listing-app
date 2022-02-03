<?php

class Users extends Controller
{

  public function index(): void
  {

    $users = $this->loadModel('User');

    $data['page_title'] = 'Users';

    $this->view('pages/users', $data);
  }

}