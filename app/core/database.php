<?php
/**
 * Database class follows the singleton pattern preventing the app to make multiple database
 * connections
 */
class Database 
{
  /**
   * Stores the database instance
   * 
   * @var object|null
   */
  private static ?object $instance = null;
  /**
   * Stores the connection instance
   * 
   * @var object
   */
  private object $conn;
  /**
   * All of the following properties are storing database credentials coming from 'core/config.php'
   * 
   * @var string
   */
  private string $dbType = DB_TYPE;
  private string $dbHost = DB_HOST;
  private string $dbName = DB_NAME;
  private string $dbUser = DB_USER;
  private string $dbPassword = DB_PASSWORD;
  /**
   * Constructor sets the database PDO instance or throws an exception
   */
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
  /**
   * Makes the database class instance or instantiates if it is not set
   * 
   * @return object
   */
  public static function getInstance(): object
  {
    if(!self::$instance)
    {
      self::$instance = new Database();
    }
   
    return self::$instance;
  }
  /**
   * @return object
   */
  public function getConnection(): object
  {
    return $this->conn;
  }
}