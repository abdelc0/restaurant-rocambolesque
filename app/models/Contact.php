<?php
class Contact
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function createContact($postData)
    {
        $this->db->query("INSERT INTO `contact` (`name`, `surname`, `email`, `phone`, `message`) VALUES (:nm, :snm, :eml, :phn, :msg);");
        $this->db->bind(':nm', $postData['name'], PDO::PARAM_STR);
        $this->db->bind(':snm', $postData['surname'], PDO::PARAM_STR);
        $this->db->bind(':eml', $postData['email'], PDO::PARAM_STR);
        $this->db->bind(':phn', $postData['phone'], PDO::PARAM_INT);
        $this->db->bind(':msg', $postData['message'], PDO::PARAM_STR);

        return $this->db->execute();
    }
}
