	DROP PROCEDURE `createUpdateGenero`; 
	DELIMITER //
		CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGenero`(IN `in_idgenero` INT(23), IN `in_nombre` VARCHAR(24), OUT `return_value` INT) 
		NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER
	    BEGIN
			INSERT INTO genero values(null,in_nombre)
	    END
	DELIMITER //

Ultimo: funciona....

	DROP PROCEDURE `createUpdateGener2o`; 
	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	       INSERT INTO genero values(null,in_nombre); 
	END$$
	DELIMITER ;


Nuevo:: funciona...
	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	       INSERT INTO genero values(null,in_nombre); 
	END$$
	DELIMITER ;

Nuevo::  No funciono...
	DROP PROCEDURE `createUpdateGener2o`; 
	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	     IF in_idgenero IS NULL then
	     BEGIN 
	       INSERT INTO genero values(null,in_nombre); 
	       END;
	END$$
	DELIMITER ;

NUEVO:: no funciono..

	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	     IF in_idgenero IS NULL then
	     BEGIN 
	       INSERT INTO genero values(null,in_nombre); 
	     END IF   //le puse end if, en vez de end$$, o end
	END$$
	DELIMITER 

NUEVO::   regrese los cambios del condicional.. funciona obviamente

	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	       INSERT INTO genero values(null,in_nombre);
	END$$
	DELIMITER ;


	PRUEBA:: Me fuciono...

	CREATE procedure ej(IN val int) /* Parámetro de entrada */ begin 

	IF val = 0 then INSERT INTO tbejemplo VALUES('No disponible'); 
		else 
			INSERT INTO tbejemplo VALUES(val); 
		end IF;
	end


NUEVO:::: No funciono... Dice que algo esta estauivocado cerca de IS NULL THEN

	DROP PROCEDURE `createUpdateGener2o`; 
	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	    IFin_idgenero IS NULL then
	       INSERT INTO genero values(null,in_nombre);
	       else 
	       
	       end IF;
	       
	END$$
	DELIMITER ;


NUEVO::::: no funciona porque no existe la funcion que dice DROP

	DROP PROCEDURE `createUpdateGener2o`; 
	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	    IFin_idgenero IS NULL then
	    BEGIN
	       INSERT INTO genero values(null,in_nombre);
	         END
	       else 
	        BEGIN  END;
	        
	       end IF;
       

NUEVO::::: No funciona porque sigue diciendo que algo esta equivocado cerca de IS NULL THEN
 
	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	    IFin_idgenero IS NULL then
	    BEGIN
	       INSERT INTO genero values(null,in_nombre);
	         END
	       else 
	        BEGIN  END;
	        
	       end IF;


NUEVO::: Le cambie la conficion, NO FUNCIONA


	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	    IF 2==2 then
	    BEGIN
	       INSERT INTO genero values(null,in_nombre);
	         END
	       else 
	        BEGIN  END;
	        
	       end IF;


 NUEVo:: le quite un = del operador. No funciona pero llega mas lejos

	 DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	    IF  2 = 2 then
	       INSERT INTO genero values(null,in_nombre);
	       else 
	       end IF;
	END$$
	DELIMITER ;


NUEVO::: le puse algo en el else.. ME FUNCIONOOOO



	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	    IF  2 = 2 then
	       INSERT INTO genero values(null,in_nombre);
	       else 
	       INSERT INTO genero values('HOAK',in_nombre);
	       end IF;
	END$$
	DELIMITER ;

NUEVO:::: le cambie la condicion para ajustarla a lo que necesito::
ME FUNCIONO

		
	DROP PROCEDURE `createUpdateGener2o`; 
	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	    IF  in_idgenero IS NULL then
	       INSERT INTO genero values(null,in_nombre);
	       else 
	       INSERT INTO genero values('HOAK',in_nombre);
	       end IF;
	END$$
	DELIMITER ;

NUEVO::: coloque los begin y end en los condicionales a ver si es por eso que deja de funcionar... Pero parece que no... Me sirvio igual



	DROP PROCEDURE `createUpdateGener2o`; 
	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	    IF  in_idgenero IS NULL then
	    BEGIN
	       INSERT INTO genero values(null,in_nombre);
	        END;
	       else 
	       BEGIN
	       INSERT INTO genero values('HOAK',in_nombre);
	        END;
	       end IF;
	END$$

NUEVO:::: cambie la instruccion de la clausula ELSE, para ajustarla a los que se necesira.. No dunciono... Dice que algo esta equivocado cerca '', en la linea que señaa la clausula where

	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	    IF  in_idgenero IS NULL then
	    BEGIN
	       INSERT INTO genero values(null,in_nombre);
	        END;
	       else 
	       BEGIN
	        UPDATE genero
	     set 
	     id_genero = in_idgenero,
	     nombre = in_nombre
	     where id_genero = in_idgenero;
	        END;


NUEVO::: Le puse parentesis a los valores del update a ver. No funciono.


	 DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	    IF  in_idgenero IS NULL then
	    BEGIN
	       INSERT INTO genero values(null,in_nombre);
	        END;
	       else 
	       BEGIN
	        UPDATE genero
	     set 
	     (id_genero = in_idgenero,
	     nombre = in_nombre)
	     where id_genero = in_idgenero;
	        END;




NUEVO:::: Le puse comillas simples a los valores del update. No funciono, dice  Algo está equivocado en su sintax cerca ''id_genero' = in_idgenero,
     'nombre' = in_nombre
    where id_genero = in_' en la linea 14, señala al SET....

	DELIMITER $$
	CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
	    BEGIN 
	    DECLARE return_value int;
	    set return_value = 0;
	    IF  in_idgenero IS NULL then
	    BEGIN
	       INSERT INTO genero values(null,in_nombre);
	        END;
	       else 
	       BEGIN
	        UPDATE genero
	     set 
	     'id_genero' = in_idgenero,
	     'nombre' = in_nombre
	    where id_genero = in_idgenero;
	        END;

El detalle es la sentencia update.. porqe con otra instruccion si funciona....

