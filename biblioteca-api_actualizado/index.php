<?php
require './config/database.php';
require './controllers/LibroController.php';
require './controllers/PrestamoController.php';

$db = Database::connect();
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if (preg_match('/^\/libros(\/\d+)?$/', $request, $matches)) {
    $id = isset($matches[1]) ? ltrim($matches[1], '/') : null;
    LibroController::handle($db, $method, $id);
} elseif ($request === '/prestamos' && $method === 'POST') {
    PrestamoController::handle($db);
} else {
    header("HTTP/1.0 404 Not Found");
    echo json_encode(["error" => "Ruta no encontrada"]);
}
