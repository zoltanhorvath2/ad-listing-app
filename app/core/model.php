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
    
    if($check){
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }else{
      return null;
    }
  }

  protected function write(string $query, array $data = []): bool
  {
    $db = $this->connection;
    $stmt = $db->prepare($query);
    $check = $stmt->execute($data);
    
    return (bool)$check;
  }
  
}