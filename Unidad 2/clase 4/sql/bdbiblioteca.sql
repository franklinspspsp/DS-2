-- Base de Datos Biblioteca
-- Autor: Hugo Espetia
-- Fecha: 19/4/21
DROP DATABASE IF EXISTS bdbiblioteca;

CREATE DATABASE IF NOT EXISTS bdbiblioteca;

USE bdbiblioteca;

-- Crear tabla TAutor
DROP TABLE IF EXISTS tautor;
CREATE TABLE IF NOT EXISTS tautor(
  codautor CHAR(5) NOT NULL,
  apellidos VARCHAR(50) NOT NULL,
  nombres VARCHAR(50) NOT NULL,
  nacionalidad VARCHAR(50) NOT NULL,
  profesion VARCHAR(50) NOT NULL,
  PRIMARY KEY(codautor)
)ENGINE=INNODB DEFAULT CHARSET=latin1;

-- Crear la tabla TLibro
DROP TABLE IF EXISTS tlibro;
CREATE TABLE IF NOT EXISTS tlibro(
  codlibro CHAR(5) NOT NULL,
  titulo VARCHAR(50) NOT NULL,
  editorial VARCHAR(50) NOT NULL,
  anio INT,
  PRIMARY KEY(codLibro)
)ENGINE=INNODB DEFAULT CHARSET=latin1;

-- Crear la tabla TPrestamo
DROP TABLE IF EXISTS tprestamo;
CREATE TABLE IF NOT EXISTS tprestamo(
  codautor CHAR(5) NOT NULL,
  codlibro CHAR(5) NOT NULL,
  fechaprestamo DATE,
  fechadevolucion DATE,
  PRIMARY KEY(codautor,codlibro, fechaprestamo),
  FOREIGN KEY(codautor) REFERENCES tautor(codautor),
  FOREIGN KEY(codlibro) REFERENCES tlibro(codlibro)
)ENGINE=INNODB DEFAULT CHARSET=latin1;

-- Insercion de datos
INSERT INTO tautor VALUES('A0001','Vargas Llosa','Mario','Peruano','Literato');
INSERT INTO tautor VALUES('A0002','Vallejo','Cesar','Peruano','Literato');
SELECT * FROM tautor;

INSERT INTO tlibro VALUES('L0001','La casa verde','Alfaguara',1975);
INSERT INTO tlibro VALUES('L0002','Los heraldos negros','Alfaguara',1975);
SELECT * FROM tlibro;

INSERT INTO tprestamo VALUES('A0001','L0001','2020/10/12','2020/10/13');
INSERT INTO tprestamo VALUES('A0002','L0002','2020/10/12','2020/10/13');
SELECT * FROM tprestamo;








