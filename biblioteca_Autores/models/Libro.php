<?php
class Libro {
    public $id;
    public $nombre;
    public $codigo;
    public $autor;

    public static function all($db) {
        $stmt = $db->query("SELECT * FROM libro");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($db, $data) {
        $stmt = $db->prepare("INSERT INTO libro (nombre, codigo, autor) VALUES (?, ?, ?)");
        return $stmt->execute([$data['nombre'], $data['codigo'], $data['autor']]);
    }

    public static function update($db, $id, $data) {
        $stmt = $db->prepare("UPDATE libro SET nombre = ?, codigo = ?, autor = ? WHERE id = ?");
        return $stmt->execute([$data['nombre'], $data['codigo'], $data['autor'], $id]);
    }
}
