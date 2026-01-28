<?php
require_once __DIR__ . '/../config/Database.php';

class User {
    private $conn;
    private $table = "users";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function register($name, $email, $password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO $this->table (name, email, password) VALUES (:n, :e, :p)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':n' => $name,
            ':e' => $email,
            ':p' => $hash
        ]);
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM $this->table WHERE email = :e";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':e' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
?>