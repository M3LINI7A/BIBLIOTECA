// controllers/AutorController.php
require_once './models/Autor.php';

class AutorController {
    private $autor;

    public function __construct($db) {
        $this->autor = new Autor($db);
    }

    public function listar() {
        echo json_encode($this->autor->listar());
    }

    public function registrar($data) {
        if ($this->autor->registrar($data['nombre'])) {
            echo json_encode(['status' => 'Autor registrado']);
        }
    }

    public function actualizar($id, $data) {
        if ($this->autor->actualizar($id, $data['nombre'])) {
            echo json_encode(['status' => 'Autor actualizado']);
        }
    }
}