<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'pharmacie';
    private $username = 'root';
    private $password = '';
    private $port = 3307;
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";port=" .$this->port .";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
