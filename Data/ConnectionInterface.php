<?php
require_once __DIR__ . "/../db_config.php";
require_once __DIR__ . "/../Model/Client.php";

class ConnectionInterface {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conectar();
    }

    public function add($client, $table) {
        try {
            $clientArray = get_object_vars($client);
            $columns = implode(', ', array_keys($clientArray));
            $placeholders = implode(', ',  array_fill(0, count($clientArray), '?'));
            $sql = "INSERT INTO " . $table . " ($columns) VALUES ($placeholders)";
            $stmt = $this->conn->prepare($sql);
            $values = array_values($clientArray);
            return $stmt->execute($values);
        } catch (PDOException $e) {
            error_log("Error de base de datos: " . $e->getMessage());
            echo json_encode(["message" => "Error al registrar cliente"]);
            return false;
        }
    }

    public function update() {
        
    }

    public function delete() {
        
    }

    public function get() {
        
    }
}
?>