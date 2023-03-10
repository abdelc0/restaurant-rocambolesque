<?php
class Registration
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUserByUsername($username)
    {
        $this->db->query("SELECT `id`, `username`, `password` FROM `users` WHERE `username` = :usr;");
        $this->db->bind(':usr', $username, PDO::PARAM_STR);

        return $this->db->single();
    }

    public function getRole()
    {
        $this->db->query("SELECT `role` FROM `users` where `id`= :id;");
        $this->db->bind(':id', $_SESSION['user_id'], PDO::PARAM_INT);

        return $this->db->single();
    }

    public function createUser($postData)
    {
        $this->db->query("INSERT INTO `users` (`username`, `password`) VALUES (:usr, :pwd);");
        $this->db->bind(':usr', $postData['username'], PDO::PARAM_STR);
        $this->db->bind(':pwd', $postData['password'], PDO::PARAM_STR);

        return $this->db->execute();
    }

    public function checkExist($username)
    {
        $this->db->query("SELECT `username`, FROM `users` WHERE `username` = :usr");
        $this->db->bind(':usr', $username, PDO::PARAM_STR);
     
        return $this->db->single();
    }
}
