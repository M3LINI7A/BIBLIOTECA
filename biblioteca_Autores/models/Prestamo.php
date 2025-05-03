<?php
class Prestamo {
    public static function create($db, $data) {
        $stmt = $db->prepare("INSERT INTO prestamo (fecha, lector, libro_id) VALUES (?, ?, ?)");
        return $stmt->execute([$data['fecha'], $data['lector'], $data['libro_id']]);
    }
}
