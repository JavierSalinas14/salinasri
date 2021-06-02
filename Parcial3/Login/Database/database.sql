DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
);

INSERT INTO `login` (`id`, `correo`, `usuario`, `clave`) VALUES
(1, 'Javier@gamil.com', 'Javier', 'a985dff893f42b36aa0d72537b9941cba9eb7229efeb43845ee669207a0d0ae7b6882eac58def84563770082132ac21591a8fe5a4802802581ac3316fbbcbbd7'), --la contrasena es: Salinas
(2, 'Alexis@gmail.com', 'Alexis', 'e18b33cd704ffc54274adf6559d5c871557c7f31144e6c77997cb3c808f47b1e10e1a35e37b4ef4df4f85b40ec3f6f07ea0dc19d63ddd128a8f1013ea5b34655'); --la contrasena es: Perez