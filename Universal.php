<?php

/**
 * Connect to a database using PHP PDO.
 */
class Universal
{
 
    // Database Mysql
    /*private static $database = "mysql:"; 
    private static $host = ""; //insira o host exemplo: localhost:8080. 
    private static $dbname = ""; // insira o nome do banco. 
    private static $user = "enter username if any"; // insira o nome de usuário se houver.
    private static $pass = ""; // insira a senha(password) se houver.
    private static $dsn;*/

    //Database Sqlite
    private static $database = "sqlite:"; 
    private static $host = "database.db";
    private static $dbname = "";
    private static $user = null;
    private static $pass = null;
    private static $dsn;
    
    /**
     * Do Connection.
     *
     * @return \PDO
     */
    public static function doConnection()
    {
        
        self::$dsn = self::$database.self::$host.self::$dbname;
         
        try{
              $conn = new \PDO(self::$dsn, self::$user, self::$pass, array(\PDO::ATTR_PERSISTENT => true));
               echo "<script>console.log('Connection successful!')</script>";
               return $conn;
        } catch(\PDOException $e){
               exit("Connection failed error: ".$e->getMessage()."<br/>");
        }

    }
}
