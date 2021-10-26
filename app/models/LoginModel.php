<?php
class LoginModel{
    private $table = 'admin';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function checkLogin($data)
    {
        $query = "SELECT * FROM admin WHERE username=:username AND password=:password";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', md5($data['password']));
        $data = $this->db->single();
        return $data;
    }
}