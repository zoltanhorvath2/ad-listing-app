<?php
/**
 * This class is inherited by every other models
 */
class Model
{ 
  /**
   * This property stores our database connection
   * 
   * @var object
   */
  private object $connection;
  /**
   * Constructor sets the database connection
   */
  public function __construct()
  {
    $db = Database::getInstance();
    $dbc = $db->getConnection();

    $this->connection = $dbc;

  }
  /**
   * This function makes all the similar reading operations from the database
   * 
   * @param string
   * 
   * @param array
   * 
   * @return array|null
   */
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
  /**
   * This function makes all the similar writing operations to the database
   * 
   * @param string
   * 
   * @param array
   * 
   * @return bool
   */
  protected function write(string $query, array $data = []): bool
  {
    $db = $this->connection;
    $stmt = $db->prepare($query);
    $check = $stmt->execute($data);
    
    return (bool)$check;
  }
  
}