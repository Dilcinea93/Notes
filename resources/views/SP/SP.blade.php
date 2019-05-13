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



SP QUE HIZO VICTOR SILHADO

CREATE DEFINER=root`@`localhost PROCEDURE createUpdateGenero(
 in in_idgenero int,
   in in_nombre varchar(20),
   OUT return_value int)
BEGIN
set return_value = 0;
  IF in_idgenero IS NULL then
  BEGIN
    INSERT INTO genero values(null,in_nombre);
    SET return_value = (select LAST_INSERT_ID()); 
  END;
  ELSE 
    BEGIN
     UPDATE genero   --------------------
     set 
     id_genero = in_idgenero,
     nombre = in_nombre
     where id_genero = in_idgenero;
     SET return_value = in_idgenero;
  END;
END IF;
END



nuevo::: funcionooo... pero ya  no funciona no se porque

DROP PROCEDURE `createUpdateGenero`; CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGenero`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER BEGIN DECLARE return_value int; set return_value = 0; IF in_idgenero IS NULL then BEGIN INSERT INTO genero values(null,in_nombre); SET return_value = (select LAST_INSERT_ID()); END; else BEGIN INSERT INTO genero values('HOAK',in_nombre); END; end IF; END


NUEVO:::
DROP PROCEDURE `createUpdateGenero`; 
CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGenero`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
BEGIN 
     DECLARE return_value int; 
     set return_value = 0; 
      IF in_idgenero IS NULL then 
       
       BEGIN 
          INSERT INTO genero values(null,in_nombre); 
          SET return_value = (select LAST_INSERT_ID()); 
       END;
      else 
        BEGIN
        END; 
      end IF;
END
NUEVO::: funciono...

DROP PROCEDURE `createUpdateGenero`; 
	DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGenero`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER BEGIN DECLARE return_value int; set return_value = 0; IF in_idgenero IS NULL then BEGIN INSERT INTO genero values(null,in_nombre);
    SET return_value = (select LAST_INSERT_ID()); END; else BEGIN INSERT INTO genero values('HOAK',in_nombre); END; end IF; END$$


    aveces me dice algo esta equivocado cerca '' en la linea x y solo signidica que le fatan los delimitadores...
    Me paso, le puse los delimitadors y ya


NUEVO::: funciono...


DROP PROCEDURE `createUpdateGenero`; 
	DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGenero`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER BEGIN DECLARE return_value int; set return_value = 0; IF in_idgenero IS NULL then BEGIN INSERT INTO genero values(null,in_nombre); SET return_value = (select LAST_INSERT_ID()); END; else BEGIN UPDATE genero set id_genero = in_idgenero, nombre = in_nombre where id_genero = in_idgenero; END; end IF; END$$

NUEVO::: FUNCIONO

  DROP PROCEDURE `createUpdateGenero`; 
	DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGenero`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER BEGIN DECLARE return_value int; set return_value = 0; IF in_idgenero IS NULL then BEGIN INSERT INTO genero values(null,in_nombre); SET return_value = (select LAST_INSERT_ID()); END; else BEGIN UPDATE genero set id_genero = in_idgenero, nombre = in_nombre where id_genero = in_idgenero; 
     SET return_value = in_idgenero;END; end IF; END$$


     NUEVO::: FUNCIONA, pero no tiene el create procedure.. no se como funciona..



 DROP PROCEDURE `createUpdateGenero`; 
	DELIMITER $$
    BEGIN 
         DECLARE return_value int; 
         set return_value = 0; 
         IF in_idgenero IS NULL then 
             BEGIN 
                 INSERT INTO genero values(null,in_nombre); 
                 SET return_value = (select LAST_INSERT_ID()); 
             END; 
         else 
             BEGIN 
                 UPDATE genero set id_genero = in_idgenero, nombre = in_nombre where id_genero = in_idgenero; 
                 SET return_value = in_idgenero;
             END; 
         end IF;  
    END$$

    --------------------------------------------

Nuevo, con el create procedure. Funciona

 DROP PROCEDURE `createUpdateGenero`; 
	DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createUpdateGener2o`(IN `in_idgenero` INT, IN `in_nombre` VARCHAR(20), OUT `return_value` INT) 
	NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
    BEGIN 
         DECLARE return_value int; 
         set return_value = 0; 
         IF in_idgenero IS NULL then 
             BEGIN 
                 INSERT INTO genero values(null,in_nombre); 
                 SET return_value = (select LAST_INSERT_ID()); 
             END; 
         else 
             BEGIN 
                 UPDATE genero set id_genero = in_idgenero, nombre = in_nombre where id_genero = in_idgenero; 
                 SET return_value = in_idgenero;
             END; 
         end IF;  
    END$$

-----------------------------------------------------------------
    INNER JOIN.---------------------------------------------
    -------------------------------------------------------------
funciono...


    SELECT * FROM perfil AS p
INNER JOIN  listas AS l ON
p.id_perfil = l.id_perfil


-----------------------Valida que el idlistacancion no este vacio.. No funciona..

IF idlistacancion IS NULL then 
             BEGIN 
                 INSERT INTO genero values(null,in_nombre); 
             END; 
         else

---------------------Lo hice de otra forma a ver si sirve.. No sirve

 DELIMITER $$
 BEGIN 
         IF idlistacancion IS NULL then 
             BEGIN 
                 INSERT INTO genero values(null,'YOHANNA');  
             END; 
         else 
             BEGIN 
                 UPDATE genero set id_genero = 2, nombre = rock where id_genero = 2;
             END; 
         end IF;  
    END$$


    NUEVO::: no sirve


    IF (3>2)
begin
select * from lista_cancion where id_lista_cancion =idlistacancion
END


----------------Lo hice con la sentencia CASE::.. N funciono..

CASE idlistacacion  
	WHEN >0 THEN 

		select * from lista_cancion where id_lista_cancion =idlistacancion
	ELSE result  
END


-----------------------Setee el conficional... no sirvio.. "algo esta equivocado cerca ELSE RESULT END"

CASE idlistacacion  
   WHEN 3 THEN 
     select * from lista_cancion where id_lista_cancion =idlistacancion
   ELSE result  
END

*------------------------Le quite el result y el else. No funciono.. Algo esta equivocado cerca END


CASE idlistacacion  
   WHEN 3 THEN 
     select * from lista_cancion where id_lista_cancion =idlistacancion
    
END

-------------------defini un else con una instruccion... Algo esta equivocado cerca ELSE SELECT * from.......

CASE idlistacacion  
   WHEN 3 THEN 
     select * from lista_cancion where id_lista_cancion =idlistacancion
   ELSE 
   
     select * from lista_cancion where id_lista_cancion =1
END



NUEVO:::: busque de un tutorial a ver si ellos hacen bien el condicional. No funciono...
algo esta equivocado cerca delimiter $$.......

//select * from lista_cancion where id_lista_cancion =idlistacancion

delimiter $$
CREATE procedure ej(IN val int)     /* Parámetro de entrada */
  begin    
    IF val = 0 then
      INSERT INTO tbejemplo VALUES('No disponible');
    else
      INSERT INTO tbejemplo VALUES(val);
    end IF;
  end$$
delimiter ;

nuevo:::: me sirvio...

BEGIN  
         IF in_idgenero IS NULL then 
             BEGIN 
                 select * from lista_cancion where id_lista_cancion =idlistacancion;
             END; 
         else 
             BEGIN 
                 UPDATE genero set id_genero = in_idgenero, nombre = in_nombre where id_genero = in_idgenero; 
             END; 
         end IF;  
    END

    nuevo::: le quite el else. No me funciono....


    BEGIN  
         IF in_idgenero IS NULL then 
             BEGIN 
                 select * from lista_cancion where id_lista_cancion =idlistacancion;
             END; 
           
    END


    Nuevo.. le deje el else vacio...  no me funciono... 

    BEGIN  
         IF in_idgenero IS NULL then 
             BEGIN 
                 select * from lista_cancion where id_lista_cancion =idlistacancion;
             END; 
         else 
              
         end IF;  
    END


    nuevo.... deje el begin y el end en el else pero estan vacios... FUNCIONO!

    BEGIN  
         IF in_idgenero IS NULL then 
             BEGIN 
                 select * from lista_cancion where id_lista_cancion =idlistacancion;
             END; 
         else 
             BEGIN 
             END; 
         end IF;  
    END


    nuevo.... ajuste la condicion... funciono...

    BEGIN  
         IF idlistacancion IS NOT NULL then 
             BEGIN 
                 select * from lista_cancion where id_lista_cancion =idlistacancion;
             END; 
         else 
             BEGIN 
             END; 
         end IF;  
    END


    ****parece que el problema era que el if no puede ir sin el else, pero si va a llevar el else, el else debe tener 
    sus BEGIN y END.... es lo que veo....


    //Consultas a varias tblas....

Uno>>> me funciono..

    select l.nombre,c.titulo from listas as l,canciones as c

    dos>>> no funciono.. dice que l.id_lista no existe.. debe ser porque no la estoy seleccionando...

    select l.nombre,c.titulo from listas as l,canciones as c inner join lista_cancion as lc on lc.id_lista=c.id_lista

    tercero>>>> 

    selecciono ahora id_lista


    select l.nombre,l.id_lista,c.titulo from listas as l,canciones as c inner join lista_cancion as lc on lc.id_lista=l.id_lista


    nuevo..... 
    select lc.id_lista_cancion,l.nombre from lista_cancion as l inner join listas as l on l.id_lista=lc.id_lista


    uevo>>> funciona.. Selecciona las listas y canciones

    select lc.id_lista,l.nombre from lista_cancion as lc inner join listas as l on l.id_lista=lc.id_lista


    nuevo... FUNCIONA!! trae la lista y las canciones de esa lista..

    select lc.id_lista,l.nombre,c.titulo from lista_cancion as lc inner join listas as l on l.id_lista=lc.id_lista inner join canciones as c on lc.id_cancion=c.id_cancion


    nuevo... para traer las listas, sus canciones y el due;o. FUNCIONA....  

select lc.id_lista,l.nombre,l.id_perfil,p.username,c.titulo from lista_cancion as lc inner join listas as l on l.id_lista=lc.id_lista inner join canciones as c on lc.id_cancion=c.id_cancion inner join perfil as p on p.id_perfil=l.id_perfil

nuevo.... adapte la consulta en el SP de listas y canciones.. No me sirve...
algo esta equivocado cerca ELSE.......

BEGIN  
         IF idlistacancion IS NOT NULL then 
             BEGIN 
                 select l.id_perfil,p.username,lc.id_lista,l.nombre,c.titulo from lista_cancion as lc inner join listas as l on l.id_lista=lc.id_lista inner join canciones as c on lc.id_cancion=c.id_cancion inner join perfil as p on p.id_perfil=l.id_perfil
             END; 
         else 
             BEGIN 
             END; 
         end IF;  
    END
