<?php
namespace Portfolio\model;
class Database{
    private static $user = "shimxxju_April";
    private static $pass = "kyU1Z@.u36@W";
    private static $dsn = "mysql:host=localhost;dbname=shimxxju_contact_me";
    private static $dbcon;

    private function __construct(){

    }
    public static function getDb()
    {
        if(!isset(self::$dbcon)){
            try{
                self::$dbcon = new \PDO(self::$dsn, self::$user, self::$pass);
                self::$dbcon->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$dbcon->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            }catch (\PDOException $e) {
                $msg = $e->getMessage();
                include '../custom-error.php';
                exit();
            }

        }
        return self::$dbcon;
    }


}

