create database Probabilidad
USE Probabilidad 

drop DATABASE Probabilidad 

CREATE TABLE `usuarios` (
  `id` int(11) PRIMARY KEY auto_increment,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  telefono INT(10),
  `privilegio` int(2) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) 

CREATE TABLE DatosUsuario(
id int primary key AUTO_INCREMENT,
nombres VARCHAR(30),
apellidos VARCHAR(30),
edad VARCHAR(30),
grado VARCHAR(30),
id_usu INT NOT NULL ,
FOREIGN KEY (id_usu) REFERENCES usuarios(id)
)


CREATE TABLE DatosTabla(
id int PRIMARY KEY AUTO_INCREMENT,
Estrategia VARCHAR(30),
Pre1 VARCHAR(50),
Pre2 VARCHAR(50),
Pre3 VARCHAR(50),
Pre4 VARCHAR(50),
Pre5 VARCHAR(50),
Pre6 VARCHAR(50),
Pre7 VARCHAR(50),
Pre8 VARCHAR(50),
Pre9 VARCHAR(50),
Pre10 VARCHAR(50),
Pre11 VARCHAR(50),
Pre12 VARCHAR(50),id_usu INT NOT NULL,
FOREIGN KEY (id_usu) REFERENCES usuarios(id)
)

DROP TABLE Resultados

CREATE TABLE Resultados(
id int PRIMARY KEY AUTO_INCREMENT, 
Estrategia VARCHAR(30),
Exito INT,
Fracaso INT,
id_usu INT NOT NULL,
FOREIGN KEY (id_usu) REFERENCES usuarios(id)
)

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `password`, telefono,
`privilegio`, `fecha_registro`) VALUES ('1', 'david', 'david@gmail.com', 'david','987912688', '1', CURRENT_TIMESTAMP());



SELECT * FROM usuarios
SELECT * FROM DatosUsuario


SET GLOBAL event_scheduler = ON;

--DESACTIVAR USUARIO DESPUES DE 5 MINUTOS DE CREACION
CREATE EVENT insertion_event3
ON SCHEDULE  EVERY 1 MINUTE 
STARTS  CURRENT_TIMESTAMP + INTERVAL 1 MINUTE
ON COMPLETION PRESERVE
DO 
UPDATE usuarios SET usuario = '@Inactivo'
WHERE fecha_registro < (current_time() - INTERVAL 5 minute) and privilegio="2";

-- CREATE EVENT insertion_event2
-- ON SCHEDULE  EVERY 1 MINUTE 
-- STARTS  CURRENT_TIMESTAMP + INTERVAL 1 MINUTE
-- ON COMPLETION PRESERVE
-- DO INSERT INTO test VALUES ('Prueba',NOW());

drop EVENT insertion_event3

SELECT * FROM resultados

DELETE FROM resultados WHERE id_usu=6

CREATE TABLE UsuarioPublico(
id int PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(45),
correo VARCHAR(100)
)

SELECT * FROM UsuarioPublico
DROP TABLE UsuarioPublico


  



