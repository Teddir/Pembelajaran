<?php

class Sigup_model
{
    private $db;    
    public function __Construct()
    {
        $this->db = new Database;
    }
    public function getAll()
    {
        $this->db->query('SELECT * FROM login1' );
        return $this->db->resultSet();
    }

    public function getId($id)
    {
        $this->db->query('SELECT * FROM artikel WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function login($data)
    {
        $query = "SELECT * FROM login1 WHERE name=:name && password=:password";
        
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('password', $data['password']);

        $this->db->exe();

        if ( $hasil =  $this->db->rowCount ()){
            echo "<script>
            alert('User Telah Terdaftar');
            document.location.href='signup.php'
        </script>";
            return false;
        }
        $query = "SELECT * FROM login1 WHERE  password=:password";
    
        $this->db->query($query);
        $this->db->bind('password', $data['password']);
        $this->db->exe();

        if (!$hasil= $this->db->rowCount ()) {
            
            // Flasher::sigup(); 
            return false;

        }            
            // Flasher::sigup(); 
        


    }
}