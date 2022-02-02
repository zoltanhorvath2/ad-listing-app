<?php

class User extends Model
{
  
  public function getAllUsers(){
    return $this->read('SELECT * FROM users');
  }

}