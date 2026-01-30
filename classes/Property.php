<?php
require_once __DIR__ . '/../config/Database.php'; // shkon një nivel lart dhe pastaj në config

class Property {
    private $conn;
    private $table = "properties";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function add($title, $description, $price, $image, $type, $created_by) {
        $sql = "INSERT INTO $this->table (title, description, price, image, type, created_by)
                VALUES (:t, :d, :p, :i, :ty, :cb)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':t' => $title,
            ':d' => $description,
            ':p' => $price,
            ':i' => $image,
            ':ty' => $type,
            ':cb' => $created_by
        ]);
    }

    public function getAll($type = null) {
        if($type) {
            $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE type=:ty ORDER BY id DESC");
            $stmt->execute([':ty' => $type]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        $stmt = $this->conn->query("SELECT * FROM $this->table ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>