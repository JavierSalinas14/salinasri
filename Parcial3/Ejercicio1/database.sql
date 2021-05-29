CREATE DATABASE salinasri;
use salinasri;
DROP TABLE IF EXISTS `EQUIPO`;
CREATE TABLE IF NOT EXISTS `EQUIPO` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(50) NOT NULL,
  `Apellidopaterno` VARCHAR(50) NOT NULL,
  `Apellidomaterno` VARCHAR(50) NOT NULL,
  `Dorsal` INT NOT NULL,
  `Posicion` VARCHAR(50) NOT NULL,
  UNIQUE KEY `id` (`id`)
);

INSERT INTO `EQUIPO` (`id`, `Nombre`, `Apellidopaterno`, `Apellidomaterno`, `Dorsal`, `Posicion`) VALUES 
(1, "Jose de Jesus", "Corona", "Rodriguez",1,"Portero"),
(2, "Julio Cesar","Dominguez","Juarez",4,"Defensa"),
(3, "Roberto Carlos","Alvarado","Hernandez",25,"Medio"); 