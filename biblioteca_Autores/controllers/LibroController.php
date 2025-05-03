<?php
require_once './models/Libro.php';

class LibroController {
    public static function handle($db, $method, $id = null) {
        $data = json_decode(file_get_contents("php://input"), true);

        switch ($method) {
            case 'GET':
                echo json_encode(Libro::all($db));
                break;
            case 'POST':
                Libro::create($db, $data);
                echo json_encode(["status" => "Libro creado"]);
                break;
            case 'PUT':
                Libro::update($db, $id, $data);
                echo json_encode(["status" => "Libro actualizado"]);
                break;
        }
    }
}
