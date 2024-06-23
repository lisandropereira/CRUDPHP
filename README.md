# CRUDPHP
Aplicación web completa que realice operaciones CRUD 


INTEGRANTES:
-LISANDRO PEREIRA
-LUZ PESALLACCIA


ESTRUCTURA DE BASE DE DATOS

CREATE TABLE `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doce_nombre` varchar(255) DEFAULT NULL,
  `doce_apellido` varchar(255) DEFAULT NULL,
  `per_cumple` date DEFAULT NULL,
  `per_mail` varchar(255) DEFAULT NULL,
  `doce_cel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


