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
    * for general sql fetch
    */
    function sqlFetchAll($sql, $args=NULL){
        $stmt = $this->conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute($args);
        $rows = $stmt->fetchAll();
        return $rows;
    }

    /*
    * $terms: array of table fields (like "name", "password", "dob")
    * $numTerms: numerical fields that do not need formatting (BIGINT, INTEGER, FLOAT, DECIMAL,...)
    * $termContainer: array of dictionary (basically POST value) of the terms
    * $preSql: table representation - like "User(name, password, dob)"
    */
    function postAndGetId($terms, $numTerms, $termContainer, $preSql) {
        $tableName = explode("(", $preSql)[0];
        $termValues = array();
        foreach ($terms as $term) {
            $value = $termContainer[$term];
            if (!in_array($term, $numTerms)) {
                $value = "'".$value."'";
            }
            $termValues[] = $value;
        }
        $sql = 
        "INSERT INTO " . $preSql . " VALUES (" . implode(",", $termValues) . ")";
        debugAlert("Insert command:");
        debugAlert($sql);
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $lastId = $this->sqlFetchAll("SELECT id FROM $tableName ORDER BY id DESC LIMIT 1")[0]["id"];
        return $lastId;
    }

}
