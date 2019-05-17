CREATE DATABASE blissbaby;

CREATE TABLE usuario (
idusuario INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(20) NOT NULL,
apellidos VARCHAR(40) NOT NULL,
estado VARCHAR(20) NOT NULL,
municipio VARCHAR(20) NOT NULL,
domicilio VARCHAR(35) NOT NULL,
cpostal INT NOT NULL,
telefono VARCHAR(10) NOT NULL,
email VARCHAR(30) NOT NULL,
pass VARCHAR(12) NOT NULL
);

CREATE TABLE empleado (
idempleado INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(20) NOT NULL,
apellidos VARCHAR(40) NOT NULL,
estado VARCHAR(20) NOT NULL,
municipio VARCHAR(20) NOT NULL,
domicilio VARCHAR(35) NOT NULL,
cpostal INT NOT NULL,
telefono VARCHAR(10) NOT NULL,
email VARCHAR(30) NOT NULL,
pass VARCHAR(12) NOT NULL
);

CREATE TABLE servicio (
id_usuario INT NOT NULL,
id_empleado INT NOT NULL,
f_entrada DATE NOT NULL,
f_salida DATE NOT NULL,
h_entrada TIME NOT NULL,
h_salida TIME NOT NULL,
FOREIGN KEY (id_usuario) REFERENCES usuario(idusuario),
FOREIGN KEY (id_empleado) REFERENCES empleado(idempleado)
);