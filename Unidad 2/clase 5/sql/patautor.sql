-- Procedmientos almacenados para la tabla tautor
-- Hugo Espetia
-- 12/10/20

USE bdbiblioteca;

DROP PROCEDURE IF EXISTS splistarautor;

DELIMITER $$
CREATE PROCEDURE splistarautor()
BEGIN
  SELECT * FROM tautor;
END $$
DELIMITER ;

CALL splistarautor();

DROP PROCEDURE IF EXISTS spagregarautor;

DELIMITER $$
CREATE PROCEDURE spagregarautor(
  IN vcodautor CHAR(5),
  IN vapellidos VARCHAR(50),
  IN vnombres VARCHAR(50),
  IN vnacionalidad VARCHAR(50),  
  IN vprofesion VARCHAR(50)
)
BEGIN
	INSERT INTO tautor VALUES(vcodautor,vapellidos,vnombres,
	vnacionalidad,vprofesion);
END $$
DELIMITER ;

CALL spagregarautor('A0003','Valdelomar','Abraham','Peruano','Literato');

CALL splistarautor;

-- Eliminar autor
DROP PROCEDURE IF EXISTS speliminarautor;

DELIMITER $$
CREATE PROCEDURE speliminarautor(
  IN vcodautor CHAR(5))
 BEGIN
   DELETE FROM tautor WHERE codautor = vcodautor;
 END $$
DELIMITER ;

CALL speliminarautor('A0003');
CALL splistarautor;