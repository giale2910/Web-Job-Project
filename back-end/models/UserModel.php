<?php
class UserModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function register($registerInfo)
    {
        $registerInfo["role"] = "customer";
        $registerInfo["password"] = password_hash($registerInfo["password"], PASSWORD_BCRYPT, array('cost' => 12));
        $stmt = $this->conn->prepare('INSERT INTO User(email,password,role,first_name,last_name) values(:email,:password,:role,:firstName,:lastName)');
        return $stmt->execute($registerInfo);
    }
    public function getAllUsers()
    {
        return $this->sqlFetchAll("SELECT * FROM User WHERE role IN ('manager', 'customer')");
    }
    public function getAllManagers()
    {
        return $this->sqlFetchAll("SELECT * FROM User WHERE role = 'manager'");
    }
    public function findUserByEmail($email)
    {
        $rows = $this->sqlFetchAll("SELECT * FROM User WHERE email=:email", array("email"=>$email));
        if (isset($rows[0])) {
            return $rows[0];
        } else return null;
    }
    public function findUserById($id)
    {
        $rows = $this->sqlFetchAll("SELECT * FROM User WHERE id=:id", array("id"=>$id));
        if (isset($rows[0])) {
            return $rows[0];
        } else return null;
    }
    public function changePassword($info)
    {
        $password =  password_hash($info["newPwd"], PASSWORD_BCRYPT, array('cost' => 12));
        $id = $info["id"];
        $sql = "UPDATE User SET password = '$password' WHERE id = $id";
        debugAlert($sql);
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    public function editProfile($info)
    {
        $values = array();
        $fields = array("email", "first_name", "last_name", "phone", "profile_link", "address", "about");
        foreach($fields as $field) $values[] = "$field='".$info[$field]."'";
        $sql = "UPDATE User SET " . implode(",", $values) . " WHERE id=".$info["id"];
        debugAlert($sql);
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
