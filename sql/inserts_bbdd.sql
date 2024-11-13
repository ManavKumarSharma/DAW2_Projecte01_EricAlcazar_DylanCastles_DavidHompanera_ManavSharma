INSERT INTO tbl_sala (ubicacion_sala) VALUES
('Sala'),
('Terraza Exterior'),
('Sala Privada');


INSERT INTO tbl_camarero (nombre_camarero, apellidos_camarero, username, password) VALUES
('Juan', 'García López', 'juang', '$2y$10$GMV4gk/G7uCYrrRf/4YnmukMLnLwYcTElPR3ssLZuS8cZ4D8JBI8W'),
('María', 'Pérez Fernández', 'mariap', '$2y$10$GMV4gk/G7uCYrrRf/4YnmukMLnLwYcTElPR3ssLZuS8cZ4D8JBI8W'),
('Carlos', 'Rodríguez Sánchez', 'carlosr', '$2y$10$GMV4gk/G7uCYrrRf/4YnmukMLnLwYcTElPR3ssLZuS8cZ4D8JBI8W'),
('Laura', 'Martínez Gómez', 'lauram', '$2y$10$GMV4gk/G7uCYrrRf/4YnmukMLnLwYcTElPR3ssLZuS8cZ4D8JBI8W');

-- Insertar mesas asociadas a cada sala
INSERT INTO tbl_mesa (id_sala, numero_sillas_mesa) VALUES
(2, 6),
(1, 8),  
(1, 8),  
(1, 8),  
(1, 8),  
(2, 6),
(2, 6), 
(1, 6),
(1, 6),
(1, 6),
(1, 6),
(2, 6), 
(3, 4), 
(1, 8),  
(1, 8),  
(1, 8),  
(1, 8),  
(3, 4), 
(3, 4), 
(2, 2), 
(2, 4), 
(2, 4), 
(2, 2), 
(3, 4); 

INSERT INTO tbl_ocupacion (id_mesa, id_camarero, fecha_inicio, fecha_final, estado_ocupacion) VALUES
(1, 1, '2024-11-08 12:00:00', NULL, 'Disponible'),
(2, 2, '2024-11-08 13:30:00', NULL, 'Disponible'),
(3, 3, '2024-11-08 14:00:00', NULL, 'Disponible'),
(4, 4, '2024-11-08 14:30:00', NULL, 'Disponible'),
(5, 1, '2024-11-08 16:00:00', NULL, 'Disponible'),
(6, 2, '2024-11-08 17:00:00', NULL, 'Disponible'),
(7, 3, '2024-11-08 18:00:00', '2024-11-08 19:00:00', 'Ocupado'),
(8, 4, '2024-11-08 12:00:00', '2024-11-08 13:00:00', 'Ocupado'),
(9, 1, '2024-11-08 13:30:00', NULL, 'Disponible'),
(10, 2, '2024-11-08 14:00:00', NULL, 'Disponible'),
(11, 3, '2024-11-08 14:30:00', '2024-11-08 15:30:00', 'Ocupado'),
(12, 4, '2024-11-08 16:00:00', NULL, 'Disponible'),
(13, 1, '2024-11-08 17:00:00', NULL, 'Disponible'),
(14, 2, '2024-11-08 18:00:00', '2024-11-08 19:00:00', 'Ocupado'),
(15, 3, '2024-11-08 12:00:00', '2024-11-08 13:00:00', 'Ocupado'),
(16, 4, '2024-11-08 13:30:00', NULL, 'Disponible'),
(17, 1, '2024-11-08 14:00:00', NULL, 'Disponible'),
(18, 2, '2024-11-08 14:30:00', '2024-11-08 15:30:00', 'Ocupado'),
(19, 3, '2024-11-08 16:00:00', NULL, 'Disponible'),
(20, 4, '2024-11-08 17:00:00', NULL, 'Disponible'),
(21, 1, '2024-11-08 18:00:00', '2024-11-08 19:00:00', 'Ocupado'),
(22, 2, '2024-11-08 14:30:00', '2024-11-08 15:30:00', 'Ocupado'),
(23, 3, '2024-11-08 16:00:00', NULL, 'Disponible'),
(24, 4, '2024-11-08 17:00:00', NULL, 'Disponible');
(5, 3, '2024-11-10 14:00:00', '2024-11-10 15:00:00', 'Registrada'),
(8, 1, '2024-11-11 11:00:00', '2024-11-11 12:00:00', 'Registrada'),
(14, 4, '2024-11-11 14:30:00', '2024-11-11 15:30:00', 'Registrada'),
(20, 3, '2024-11-12 10:00:00', '2024-11-12 11:00:00', 'Registrada'),
(9, 4, '2024-11-12 15:30:00', '2024-11-12 16:30:00', 'Registrada');
