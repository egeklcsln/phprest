<?php

class Category{
    // db stuff
    private $conn;
    private $table='categories';
    //post properties
    public $id;
    public $name;

    public $create_at;

    
    
    //constructor with db connection
    public function __construct($db) {
        $this->conn = $db;
    }
    //getting posts from database

    public function read(){
        $query='SELECT
        *
        FROM
        '.$this->table;

        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

}



?>