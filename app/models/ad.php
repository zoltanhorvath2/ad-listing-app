<?php

class Ad extends Model
{
  /**
   * Fetch all ads from database
   * 
   * @return array|null
   */
  public function getAllAds(): ?array
  {
    return $this->read("SELECT ads.id, ads.title, users.username FROM ads JOIN users ON ads.userid = users.id ORDER BY ads.id ASC");
  }

}