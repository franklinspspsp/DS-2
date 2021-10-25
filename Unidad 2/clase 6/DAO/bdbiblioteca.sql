-- Base de Datos Instituto 
-- Autor: Hugo Espetia
-- 15 de Febrero de 2017

DROP DATABASE IF EXISTS bdbiblioteca;

CREATE DATABASE IF NOT EXISTS bdbiblioteca; 

USE bdbiblioteca;

-- tabla autor
DROP TABLE IF EXISTS tautor;
CREATE TABLE IF NOT EXISTS tautor(
  CodAutor char(5) NOT NULL,
  Apellidos varchar(50) NOT NULL,
  Nombres varchar(50) NOT NULL,
  Nacionalidad varchar(50) NOT NULL,
  PRIMARY KEY (CodAutor)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO tautor VALUES
	('A0001', 'Vargas Llosa','Mario','Peruano'),
	('A0002', 'Coello','Paulo','Brasileño');


-- tabla libro
DROP TABLE IF EXISTS tlibro;
CREATE TABLE IF NOT EXISTS tlibro (
  CodLibro  char(5) NOT NULL,
  Titulo varchar(50) NOT NULL,
  Editorial varchar(50) NOT NULL,  
  PRIMARY KEY(CodLibro)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into tlibro values
('L0001','La ciudad y los perros','Alfaguara'),
('L0002','El alquimista','Rayo'),
('L0003','La casa verde','Alfaguara');

-- tabla prestamo
drop table if exists tprestamo;
create table if not exists tprestamo(
    CodAutor char(5) not null,
    CodLibro char(5) not null,
    FechaPrestamo date,
    primary key(CodAutor,CodLibro,FechaPrestamo),
    foreign key(CodAutor) references tautor(CodAutor),
    foreign key(CodLibro) references tlibro(CodLibro)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into tprestamo values
    ('A0001','L0001','2017/1/1');
insert into tprestamo values
    ('A0002','L0002','2017/1/2');
insert into tprestamo values
    ('A0001','L0003','2017/1/3');
insert into tprestamo values
    ('A0002','L0002','2017/1/4');
    
select * from tautor;    
select * from tprestamo;
select * from tlibro;



