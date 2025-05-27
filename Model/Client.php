<?php
require_once __DIR__ . "/../db_config.php";

class Cliente {
    private $conn;
    private $table = "clientes";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conectar();
    }

    public function crearCliente($nombre, $direccion, $telefono, $email) {
        $sql = "INSERT INTO " . $this->table . " (nombre, direccion, telefono, email) VALUES (:nombre, :direccion, :telefono, :email)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":direccion", $direccion);
        $stmt->bindParam(":telefono", $telefono);
        $stmt->bindParam(":email", $email);
        return $stmt->execute();
    }
}
?>
