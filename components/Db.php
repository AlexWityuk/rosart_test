<?php
namespace components;

class Db {

    public static function getConnection(){
         
        $params = array(
            'host' => '127.0.0.1:3307',
            'dbname' => 'telegramm',
            'user' => 'landing',
            'password' => '1'
        );
        
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new \PDO($dsn,$params['user'],$params['password']);

        $db->exec("set names utf8");
        return $db;
    }
}