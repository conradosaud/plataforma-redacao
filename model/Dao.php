<?php

class Dao{
    
    private static $db;
    
    const USERNAME = "localhost";
    const PASSWORD = "";
    const HOST = "localhost";
    const DB = "conradosaud";
    
    public function instance(){
        if(!self::$db){
            self::$db = $this->connect();
        }
        return self::$db;
    }
    
    private function connect(){
        
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $host = self::HOST;
        $dbname = self::DB;

        $db = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);
        $db->setAttribute(PDO::ATTR_AUTOCOMMIT, PDO::ERRMODE_EXCEPTION);
        
        return $db;
        
	
        
    }
}