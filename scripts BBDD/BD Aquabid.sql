DROP DATABASE IF EXISTS Aquabid;
CREATE DATABASE IF NOT EXISTS Aquabid;

USE Aquabid;
-- Tabla Lonja --
DROP TABLE IF EXISTS `Lonja`;
CREATE TABLE `Lonja`(
    `ID_Lonja` int NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(40) NOT NULL,
    PRIMARY KEY (`ID_Lonja`)
);
-- Tabla Clientes --
DROP TABLE IF EXISTS `Cliente`;
CREATE TABLE `Cliente`(
	`ID_Cliente` int NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(30) NOT NULL,
    `apellidos` VARCHAR(50) NOT NULL,
    `telefono` VARCHAR(9) NOT NULL,
    `usuario` VARCHAR(30) NOT NULL,
    `contrasenia` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `nombreE` VARCHAR(50) NOT NULL,
    `direccionE` VARCHAR(50) NOT NULL,
    `telefonoE` VARCHAR(9)NOT NULL,
    `cif` VARCHAR(9) NOT NULL,
    `cuentaBancaria` VARCHAR(20) NOT NULL,
    `ID_Lonja` int NOT NULL,
    PRIMARY KEY(`ID_Cliente`),
    FOREIGN KEY(`ID_Lonja`) REFERENCES Lonja(`ID_Lonja`) ON UPDATE CASCADE
    
);

-- Tabla Administradores --
DROP TABLE IF EXISTS `Administrador`;
CREATE TABLE `Administrador`(
	`ID_Admin` int NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(30) NOT NULL,
    `apellidos` VARCHAR(50) NOT NULL,
    `telefono` VARCHAR (9)NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `contrasenia` VARCHAR(30) NOT NULL,
    PRIMARY KEY(`ID_Admin`)
);

-- Tabla Subasta --
DROP TABLE IF EXISTS `Subasta`;
CREATE TABLE `Subasta`(
	`ID_Subasta` int NOT NULL AUTO_INCREMENT,
    `fecha` DATETIME NOT NULL,
    `actual` boolean NOT NULL,
    `realizada` boolean NOT NULL,
    `precio_actual` float,
    `ID_Lonja` int NOT NULL,
    `express_no` boolean,
    PRIMARY KEY(`ID_Subasta`),
    FOREIGN KEY(`ID_Lonja`) REFERENCES Lonja(`ID_Lonja`) ON UPDATE CASCADE
);

-- Tabla Lotes --
DROP TABLE IF EXISTS `Lote`;
CREATE TABLE `Lote`(
	`ID_Lote` int NOT NULL AUTO_INCREMENT,
    `barco` VARCHAR(30) NOT NULL,
    `zona_captura` VARCHAR(30) NOT NULL,
    `producto` VARCHAR(30) NOT NULL,
    `peso` int NOT NULL,
    `tamanio` int NOT NULL,
    `imagen` MEDIUMBLOB NOT NULL,
    `precio_salida` float,
    `precio_minimo` float,
    `precio_venta` float,
    `subastado` boolean NOT NULL,
    `pagado` boolean NOT NULL,
    `ID_Subasta` int,
    `ID_Cliente` int,
    `ID_Admin` int,
    PRIMARY KEY(`ID_Lote`),
    FOREIGN KEY(`ID_Subasta`) REFERENCES Subasta(`ID_Subasta`),
    FOREIGN KEY(`ID_Cliente`) REFERENCES Cliente(`ID_Cliente`),
    FOREIGN KEY(`ID_Admin`) REFERENCES Administrador(`ID_Admin`)
);

-- Tabla Participa --
DROP TABLE IF EXISTS `Participa`;
CREATE TABLE `Participa`(
	`ID_Subasta` int NOT NULL,
    `ID_Cliente` int NOT NULL,
    PRIMARY KEY(`ID_Subasta`, `ID_Cliente`),
    FOREIGN KEY(`ID_Subasta`) REFERENCES Subasta(`ID_Subasta`) ON UPDATE CASCADE,
    FOREIGN KEY(`ID_Cliente`) REFERENCES Cliente(`ID_Cliente`) ON UPDATE CASCADE
);
-- Tabla Descuentos --
DROP TABLE IF EXISTS `Descuentos`;
CREATE TABLE `Descuentos`(
    `ID_Cliente`int NOT NULL,
    `num_desc`int NOT NULL,
    `fecha_ult_comp` DATE NOT NULL,
    PRIMARY KEY (`ID_Cliente`),
    FOREIGN KEY(`ID_Cliente`) REFERENCES Cliente(`ID_Cliente`) ON UPDATE CASCADE
);
INSERT INTO `Lonja` VALUES(1, 'Santander');
INSERT INTO `Lonja` VALUES(2, 'CÃ¡diz');
INSERT INTO `Lonja` VALUES(3, 'Cartagena');
INSERT INTO `Administrador` (`ID_Admin`, `nombre`, `apellidos`, `telefono`, `email`, `contrasenia`) VALUES (NULL, 'Admin', 'Default', '555555555', 'admin.default@upm.es', '123456');
