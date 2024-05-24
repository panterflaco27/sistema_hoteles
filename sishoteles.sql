create database sishoteles;
use sishoteles;
show tables;

select * from users;

select * from hoteles;

describe hoteles;

INSERT INTO hoteles (nombre, direccion, Nhabitaciones, created_at, updated_at)
VALUES
    ('Hotel Vista Alegre', 'Calle Falsa 123, Ciudad Alegre', 20, NOW(), NOW()),
    ('Hotel Buena Vista', 'Avenida Siempre Viva 456, Ciudad Vista', 20, NOW(), NOW()),
    ('Hotel Costa del Mar', 'Boulevard del Mar 789, Ciudad Costera', 20, NOW(), NOW());

select * from habitaciones;

-- Insertar datos de habitaciones para el Hotel Vista Alegre
INSERT INTO habitaciones (hotel_id, tipo, numero, disponible, capacidad, precio) VALUES
(1, 'sencilla', 1, 1, 1, 250),
(1, 'sencilla', 2, 1, 1, 250),
(1, 'sencilla', 3, 1, 1, 250),
(1, 'doble', 1, 4, 2, 350),
(1, 'doble', 1, 5, 2, 350),
(1, 'triple', 1, 6, 3, 500),
(1, 'triple', 1, 7, 3, 500),
(1, 'triple', 1, 8, 3, 500),
(1, 'cuadruple', 9, 1, 4, 700),
(1, 'cuadruple', 10, 1, 4, 700),
(1, 'suite-junior', 11, 1, 5, 800),
(1, 'suite-junior', 12, 1, 5, 800),
(1, 'suite-junior', 13, 1, 5, 800),
(1, 'suite-junior', 14, 1, 5, 800),
(1, 'suite-junior', 15, 1, 5, 800),
(1, 'suite', 16, 1, 6, 1000),
(1, 'suite', 17, 1, 6, 1000),
(1, 'suite', 18, 1, 7, 1200),
(1, 'suite', 19, 1, 7, 1200),
(1, 'suite', 20, 1, 8, 1500);

-- Insertar datos de habitaciones para el Hotel Buena Vista
INSERT INTO habitaciones (hotel_id, tipo, numero, disponible, capacidad, precio) VALUES
(2, 'sencilla', 1, 1, 1, 250),
(2, 'sencilla', 2, 1, 1, 250),
(2, 'sencilla', 3, 1, 1, 250),
(2, 'doble', 4, 1, 2, 350),
(2, 'doble', 5, 1, 2, 350),
(2, 'triple', 6, 1, 3, 500),
(2, 'triple', 7, 1, 3, 500),
(2, 'triple', 8, 1, 3, 500),
(2, 'cuadruple', 9, 1, 4, 700),
(2, 'cuadruple', 10, 1, 4, 700),
(2, 'suite-junior', 11, 1, 5, 800),
(2, 'suite-junior', 12, 1, 5, 800),
(2, 'suite-junior', 13, 1, 5, 800),
(2, 'suite-junior', 14, 1, 5, 800),
(2, 'suite-junior', 15, 1, 5, 800),
(2, 'suite', 16, 1, 6, 1000),
(2, 'suite', 17, 1, 6, 1000),
(2, 'suite', 18, 1, 7, 1200),
(2, 'suite', 19, 1, 7, 1200),
(2, 'suite', 20, 1, 8, 1500);

-- Insertar datos de habitaciones para el Hotel Costa del Mar
INSERT INTO habitaciones (hotel_id, tipo, numero, disponible, capacidad, precio) VALUES
(3, 'sencilla', 1, 1, 1, 250),
(3, 'sencilla', 2, 1, 1, 250),
(3, 'sencilla', 3, 1, 1, 250),
(3, 'doble', 4, 1, 2, 350),
(3, 'doble', 5, 1, 2, 350),
(3, 'triple', 6, 1, 3, 500),
(3, 'triple', 7, 1, 3, 500),
(3, 'cuadruple', 8, 1, 4, 700),
(3, 'cuadruple', 9, 1, 4, 700),
(3, 'cuadruple', 10, 1, 4, 700),
(3, 'suite-junior', 11, 1, 5, 800),
(3, 'suite-junior', 12, 1, 5, 800),
(3, 'suite-junior', 13, 1, 5, 800),
(3, 'suite-junior', 14, 1, 5, 800),
(3, 'suite-junior', 15, 1, 5, 800),
(3, 'suite', 16, 1, 6, 1000),
(3, 'suite', 17, 1, 6, 1000),
(3, 'suite', 18, 1, 7, 1200),
(3, 'suite', 19, 1, 7, 1200),
(3, 'suite', 20, 1, 8, 1500);

select * from habitaciones;

select * from reservaciones;