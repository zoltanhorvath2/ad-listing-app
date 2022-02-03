<?php

class User extends Model
{
  
  public function getAllUsers(): ?array
  {
    return $this->read('SELECT * FROM users');
  }

  public function addUser($username): bool
  {
    return $this->write('INSERT INTO users (username) VALUES (:username)', ['username' => $username]);
  }

}