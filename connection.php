<?php

class Database{

    public static $connection;

    public static function setUpConnection(){

        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "root", "1998@Nan#Lasi", "robogood", "3306");
        }
    }

    public static function iud($q){
        Database::setUpConnection();
        if (Database::$connection->query($q) === TRUE) {
            echo "Query executed successfully.";
        } else {
            echo "Error: " . Database::$connection->error;
        }
    }
    

    public static function search($q){

        Database::setUpConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }
}
?>