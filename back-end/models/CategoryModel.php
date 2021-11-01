<?php
class CategoryModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getCategoryList()
    {
        $stmt = $this->conn->prepare("SELECT * FROM Category");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        return $rows;
    }
}
