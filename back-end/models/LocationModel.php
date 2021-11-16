<?php
class LocationModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getLocationList()
    {
        $stmt = $this->conn->prepare("SELECT * FROM Location");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        return $rows;
    }
}
