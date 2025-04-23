<?php
require_once './models/Prestamo.php';

class PrestamoController {
    public static function handle($db) {
        $data = json_decode(file_get_contents("php://input"), true);
        Prestamo::create($db, $data);
        echo json_encode(["status" => "Préstamo registrado"]);
    }
}
