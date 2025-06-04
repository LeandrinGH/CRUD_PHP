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

    public function update($table, $entity, $id) {
        try {
            $entityArray = get_object_vars($entity);
            $set = implode(', ', array_map(function($col) {return "$col = ?";},
            array_keys($entityArray)));
            $sql = "UPDATE $table SET $set WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $values = array_values($entityArray);
            $values[] = $id;
            return $stmt->execute($values);
        } catch (PDOException $e) {
            error_log("Error de base de datos: " . $e->getMessage());
            echo json_encode(["message" => "Error al registrar cliente"]);
            return false;
        }
    }

    public function delete($table, $id) {
        $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }

    public function get($table) {
        $sql = "SELECT * from " . $table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>