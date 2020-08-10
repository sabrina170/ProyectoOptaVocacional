database Probabilidad
USE ProbabilidadCREATE 

CREATE TABLE `usuarios` (
  `id` int(11) PRIMARY KEY auto_increment,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
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
Pre12 VARCHAR(50),
id_dato INT NOT NULL,
FOREIGN KEY (id_dato) REFERENCES DatosUsuario(id)
)


CREATE TABLE Resutados(
id int PRIMARY KEY AUTO_INCREMENT, 
Exito INT,
Fracaso INT,
id_tabla INT NOT NULL,
FOREIGN KEY (id_tabla) REFERENCES DatosTabla(id)
)

