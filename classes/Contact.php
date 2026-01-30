<?php 
require_once __DIR__ . '/../config/Database.php';

class Contact {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function save($name, $email, $message) {
        $sql = "INSERT INTO contacts (name, email, message) VALUES (:n, :e, :m)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':n' => $name,
            ':e' => $email,
            ':m' => $message
        ]);
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM contacts ORDER BY id DESC");
    }
}
?>