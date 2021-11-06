<?php
abstract class BaseModel
{
    protected $conn;
    public function __construct()
    {
        global $database;
        extract($database);
        $this->conn = new PDO('mysql:host=' . $host . ';dbname=' . $databasename, $username, $password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    
    /* 
    for general sql fetch
    */
    function sqlFetchAll($sql, $args=NULL){
        $stmt = $this->conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute($args);
        $rows = $stmt->fetchAll();
        return $rows;
    }

}
