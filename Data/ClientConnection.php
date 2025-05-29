<?php
require_once __DIR__ . "/../db_config.php";
require_once __DIR__ . "/../Model/Client.php";

class ClientConnection {
    private $conn;
    private $table = "clientes";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conectar();
    }

    public function addClient(Client $client) {
        try {
            $sql = "INSERT INTO " . $this->table . " (nombre, direccion, telefono, email) VALUES (:nombre, :direccion, :telefono, :email)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":nombre", $client->nombre);
            $stmt->bindParam(":direccion", $client->direccion);
            $stmt->bindParam(":telefono", $client->telefono);
            $stmt->bindParam(":email", $client->email);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error de base de datos: " . $e->getMessage());
            echo json_encode(["message" => "Error al registrar cliente"]);
            return false;
        }
    }

    public function getClients() {
        $sql = "SELECT * from " . $this->table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateClient($client) {
        $sql = "UPDATE " . $this->table . " SET nombre = :nombre, direccion = :direccion, telefono = :telefono, email = :email WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $data["id"]);
        $stmt->bindParam(":nombre", $data["nombre"]);
        $stmt->bindParam(":direccion", $data["direccion"]);
        $stmt->bindParam(":telefono", $data["telefono"]);
        $stmt->bindParam(":email", $data["email"]);
        return $stmt->execute();

    }
}
?>
