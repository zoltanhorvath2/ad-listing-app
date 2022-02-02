<?php

class Model
{ 

  private object $connection;

  public function __construct()
  {
    $db = Database::getInstance();
    $dbc = $db->getConnection();

    $this->connection = $dbc;

  }

  protected function read(string $query, array $data = []): ?array
  {
    $db = $this->connection;
    $stmt = $db->prepare($query);
    $check = $stmt->execute($data);
    
    if(!$check){
      return null;
    }else{
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
  }

  protected function write()
  {
    
  }
  
}