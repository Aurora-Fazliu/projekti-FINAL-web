<?php
require_once __DIR__ . '/../config/Database.php';

class User {
    private $conn;

    public function __construct() {
        $this->conn = (new Database())->connect();
    }

    public function login($email, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }

    public function register($name, $email, $password) {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare(
            "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)"
        );
        return $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => $hashed
        ]);
    }
}