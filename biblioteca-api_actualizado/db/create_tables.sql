-- Crear tabla libro
CREATE TABLE IF NOT EXISTS libro (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    codigo TEXT NOT NULL,
    autor TEXT NOT NULL
);

-- Crear tabla prestamo
CREATE TABLE IF NOT EXISTS prestamo (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    fecha TEXT NOT NULL,
    lector TEXT NOT NULL,
    libro_id INTEGER NOT NULL,
    FOREIGN KEY(libro_id) REFERENCES libro(id)
);
