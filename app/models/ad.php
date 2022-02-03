<?php

class User extends Model
{
  
  public function getAllAds(): ?array
  {
    return $this->read('SELECT * FROM ads');
  }

}