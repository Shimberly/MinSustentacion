<?php
include_once('database.php');

// Define configuration
define("DB_HOST", "ec2-54-163-253-94.compute-1.amazonaws.com");
define("DB_USER", "oqhlakuawfnmfv");
define("DB_PASS", "180da885a91cd79bbf47d52ca6637462a92b4d516cd06fb754d340237717553a");
define("DB_NAME", "d20m2tslo8j1hk");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
