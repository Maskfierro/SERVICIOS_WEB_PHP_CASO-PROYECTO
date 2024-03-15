
USE Modelo_Relacional_Proyecto;

CREATE TABLE Usuario
(
ID int AUTO_INCREMENT not null primary key,
Nombre varchar (50) not null,
Correo_Electronico varchar (50) not null,
Contraseña varchar (50) not null
);

CREATE TABLE Registro
(
ID int AUTO_INCREMENT primary key,
Nombre varchar (50) not null,
Numero_Compras int not null
);

CREATE TABLE Productos
(
ID int AUTO_INCREMENT primary key,
Nombre_prdcto varchar (100) not null,
Estado varchar (20) not null,
Detalles text (200)
);

CREATE TABLE Carrito
(
ID int AUTO_INCREMENT primary key,
Nombre_prdcto varchar (200) not null
);

CREATE TABLE Pedido
(
ID int AUTO_INCREMENT primary key,
Direccion varchar (50) not null,
Nombre varchar (20) not null,
Apellido varchar (20) not null,
Cantidad int not null
);

INSERT INTO Usuario (Nombre, Correo_Electronico, Contraseña)
VALUES ('Patricio', 'patri123@gmail.com', 'patri123'),
	   ('carol', 'caro123@gmail.com', 'caro1234'),
       ('matias', 'mati123@gmail.com', 'mati1235'),
	   ('Salomon', 'salo123@gmail.com', 'salomon1236');
       
INSERT INTO Registro (Nombre, Numero_Compras)
VALUES ('Patricio', '2'),
	   ('Carol', '5'),
       ('Matias', '7'),
       ('Salomon', '3');
       
INSERT INTO Productos (Nombre_prdcto, Estado, Detalles)
VALUES ('Tarjeta grafica', 'Buen Estado', 'El prducto tiene 4 gigas de vram de DDR5'),
	   ('Mouse', 'Buen Estado', 'Tiene un DPI de 1600 y 2 botones adicionales a los costados'),
       ('Teclado', 'Buen Estado', 'Es un teclado inalambrico recargable y con cambio de teclas adicionales'),
       ('Monitor', 'Buen Estado', 'Resolucion de hasta 1980X1024 a 120hz');

INSERT INTO Carrito (Nombre_prdcto)
VALUES ('Tarjeta grafica'),
       ('Mouse'),
       ('Teclado'),
       ('Monitor');

INSERT INTO Pedido (Direccion, Nombre, Apellido, Cantidad)
VALUES ('Bogota(colombia)', 'Patricio', 'Hernandez', '2'),
       ('Medellin(colombia)', 'Carol', 'Tatiana', '5'),
       ('Cali(colombia)', 'Matias', 'Harold', '7'),
       ('Barranquilla(colombia)', 'Salomon', 'Cruz', '3');


