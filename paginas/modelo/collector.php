<?php
include_once('database.php');

// Define configuration
<<<<<<< HEAD
define("DB_HOST", "ec2-54-225-236-102.compute-1.amazonaws.com");
define("DB_USER", "fcgnjarvfzalyc");
define("DB_PASS", "49038d8aca4616e57908b99acff6f06e92dd4573258536346a22017dee51ca58");
define("DB_NAME", "d6vslhjnhlbhkc");
=======
define("DB_HOST", "localhost");
define("DB_USER", "postgres");
define("DB_PASS", "postgres");
define("DB_NAME", "mineria");
>>>>>>> f5d5d2c2ba3a146b3fb47c6b5ed67d5d00c7a1ef


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
