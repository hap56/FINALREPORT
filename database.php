<?php
define('DATABASE', 'hap56');
define('USERNAME', 'hap56');
define('PASSWORD', 'dApqjS3S');
define('CONNECTION', 'sql2.njit.edu');

class dbConn
{
//connection object.
protected static $db;
//private construct class
private function __construct() 
{
  try 
   {
 //assign PDO object to db variable
              self::$db = new PDO( 'mysql:host=' . CONNECTION .';dbname=' . DATABASE, USERNAME, PASSWORD );
              self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  }
   catch (PDOException $e)
  {
  //error into error file logging
   echo "Connection Error: " . $e->getMessage();
   }
 }
 public static function getConnection() 
{
if (!self::$db) 
{
//new connection object.
new dbConn();
}
  return self::$db;
        }
}
