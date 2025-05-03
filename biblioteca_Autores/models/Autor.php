// models/Autor.php
class Autor {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listar() {
        $stmt = $this->conn->query("SELECT * FROM autor");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function registrar($nombre) {
        $stmt = $this->conn->prepare("INSERT INTO autor (nombre) VALUES (:nombre)");
        return $stmt->execute([':nombre' => $nombre]);
    }

    public function actualizar($id, $nombre) {
        $stmt = $this->conn->prepare("UPDATE autor SET nombre = :nombre WHERE id = :id");
        return $stmt->execute([':nombre' => $nombre, ':id' => $id]);
    }
}