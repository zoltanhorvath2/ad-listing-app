<?php

/* Database class follows the singleton pattern to prevent the app to instantiate multiple Database instances */

class Database 
{

  private static ?object $instance = null;
  private object $conn;
  
  private string $dbType = DB_TYPE;
  private string $dbHost = DB_HOST;
  private string $dbName = DB_NAME;
  private string $dbUser = DB_USER;
  private string $dbPassword = DB_PASSWORD;
   
  private function __construct()
  {
    try{
      $this->conn = new PDO($this->dbType . ":host={$this->dbHost};
      dbname={$this->dbName}", $this->dbUser,$this->dbPassword,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }catch(PDOException $e){
      die($e->getMessage());
    }
    
  }
  
  public static function getInstance(): object
  {
    if(!self::$instance)
    {
      self::$instance = new Database();
    }
   
    return self::$instance;
  }
  
  public function getConnection(): object
  {
    return $this->conn;
  }
}