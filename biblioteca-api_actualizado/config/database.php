<?php
class Database {
    public static function connect() {
        $pdo = new PDO('sqlite:./db/database.sqlite');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
