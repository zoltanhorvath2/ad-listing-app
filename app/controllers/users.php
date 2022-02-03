<?php

class Users extends Controller
{

  public function index()
  {

    $users = $this->loadModel('User');

    $this->view('users');
  }

}