<?php

class Users extends Controller
{

  public function index()
  {

    $users = $this->loadModel('User');
    var_dump($users->getAllUsers());

    $this->view('users');
  }

}