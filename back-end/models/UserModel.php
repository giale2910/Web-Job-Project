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
    public function findUserByEmail($email)
    {
        $stmt = $this->conn->prepare("SELECT * FROM User WHERE email = :email");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array("email" => $email));
        $rows = $stmt->fetchAll();
        if (isset($rows[0])) {
            return $rows[0];
        } else return null;
    }
}
