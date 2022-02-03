<?php

class Users extends Controller
{

  public function index(): void
  {

    $users = $this->loadModel('User');

    $this->view('pages/users');
  }

}