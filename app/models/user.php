<?php

class User extends Model
{
  /**
   * Fetch all users from database
   * 
   * @return array|null
   */
  public function getAllUsers(): ?array
  {
    return $this->read('SELECT * FROM users ORDER BY id ASC');
  }
  /**
   * Creates a new user record
   * 
   * @param string
   * 
   * @return bool
   */
  public function addUser(string $username): bool
  {
    return $this->write('INSERT INTO users (username) VALUES (:username)', ['username' => $username]);
  }

}