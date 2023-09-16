CREATE TABLE `pacifig2_pacificharvest.session`.`productos` (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR (200) NOT null,
  descripcion TEXT (500) NOT NULL,
  precio DECIMAL (10,2) not NULL,
  descuento TINYINT (2)  NOT NULL DEFAULT '0',
  categoria VARCHAR (50) NOT NULL,
  activo INT NOT NULL,
  created_by INT NOT NULL,
  PRIMARY KEY (id)
);



ALTER TABLE `pacifig2_pacificharvest.session`.`productos` ADD `description` TEXT (500) NOT NULL AFTER `descripcion`; 
ALTER TABLE `pacifig2_pacificharvest.session`.`productos` ADD `categorie` VARCHAR(50) NOT NULL AFTER `categoria`;
ALTER TABLE `pacifig2_pacificharvest.session`.`productos` ADD `enlace` VARCHAR(100) NOT NULL DEFAULT '#' AFTER `categorie`;



INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `descripcion`, `precio`, `descuento`, `categoria`, `activo`, `created_by`) VALUES 
(NULL, 'Centolla', '<p>El delicioso sabor y textura de la centolla la convierten en el rey de los crustáceos, lo que sumado a una bella presentación, la hacen ideal para canapés y cualquier tipo de entradas.</p>\r\n\r\n<p>Peso Neto: 190 grs.</p>\r\n\r\n<p>Peso Drenado: 120 grs.</p>', '19990', '0', 'mariscos', '1', ''), 
(NULL, 'Abalone', '<p>Peso Neto 450 grs.</p>', '24990', '0', 'mariscos', '1', ''), 
(NULL, 'Locos', '<p>Este apreciado molusco, exclusivo de las costas de Chile, cuenta con un sabor único y una textura firme. Es perfecto para acompañarlo de salsa verde, o en entradas frías o calientes. Cada lata contiene de 3 a 4 locos.</p>\r\n\r\n<p>Peso Neto 425 grs.</p>\r\n\r\n<p>Peso Drenado: 150grs.</p>', '20190', '0', 'mariscos', '1', ''), 
(NULL, 'Caracoles', '<p>Los caracoles de mar tienen el aspecto delicado de una rosa. Su textura y sabor suave permiten incluirlos tanto en platos fríos como calientes.</p>\r\n\r\n<p>Peso Neto: 110 grs.</p>\r\n\r\n<p>Peso Drenado: 50 grs.</p>', '5299', '0', 'mariscos', '1', ''), 
(NULL, 'Erizos', '<p>Pertenecientes a la familia de los equinodermos, de forma semiesférica, contienen en su interior una rica carne de color amarillo anaranjado que reproduce el sabor del mar en forma majestuosa. Ideal para comerlo como entrada, acompañado de unas crujientes tostadas.</p>\r\n\r\n<p>Peso Neto: 110 grs.</p>\r\n\r\n<p>Peso Drenado: 50 grs.</p>', '5299', '0', 'mariscos', '1', ''), 
(NULL, 'Machas', '<p>Típicas machas chilenas de agua fría. Su bella forma encierra un sabor único y una suave textura, directo desde el frío y puro mar del Sur de Chile.</p>\r\n\r\n<p>Enlatado de Peso Neto: 190 grs.</p>\r\n\r\n', '7990', '0', 'mariscos', '1', ''), 
(NULL, 'Choritos Ahumados con Aceite de Oliva\r\n', '<p>Choritos Ahumados con Aceite de Oliva. Listos para servir, ideales para aperitivos y snacks.</p>\r\n\r\n<p>Peso Neto: 114 grs.</p>\r\n\r\n<p>Drenado: 69 grs.</p>', '2090', '0', 'mariscos', '0', ''), 
(NULL, 'Navajas', '<p>Las navajas reciben su nombre a partir de la forma de concha, muy similar a las antiguas navajas de afeitar. Su carne tiene un sabor suave, lo que permite consumirlas solas, en ensaladas o con otros aderezos.</p>\r\n\r\n<p>Peso Neto: 110 grs. Peso</p>\r\n\r\n<p>Drenado: 50 grs.</p>', '5299', '0', 'mariscos', '0', ''), 
(NULL, 'Navajuelas', '<p>Similares en aspecto a las almejas tradicionales, su textura firme y carnosa las hace ideales para platos calientes, especialmente con aceite de oliva, jugo de limón y estragón.</p>', '3974', '0', 'mariscos', '1', '');


INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `descripcion`, `precio`, `descuento`, `categoria`, `activo`, `created_by`) VALUES 
(NULL, 'Pack Salmón Ahumado Merkén (6 unid)', '<p>Peso Neto: 170 grs.</p>\r\n\r\n<p>Peso Drenado: 100 grs.</p>\r\n\r\n<p>Pack contiene 6 latas de Salmón Ahumado Merkén</p>', '14990', '0', 'pescado', '0', ''), 
(NULL, 'Pack Salmón Aceite (6 unid)', '<p>Peso Neto: 170 grs.</p>\r\n\r\n<p>Peso Drenado: 100 grs.</p>\r\n\r\n<p>Pack contiene 6 latas de Salmón en Aceite</p>', '14990', '0', 'pescado', '0', ''), 
(NULL, 'Pack Salmón Agua (6 unid)', '<p>Peso Neto: 170 grs.</p>\r\n\r\n<p>Peso Drenado: 100 grs.</p>\r\n\r\n<p>Pack contiene 6 latas de Salmón en Agua</p>', '14990', '0', 'pescado', '0', ''), 
(NULL, 'Salmon en Aceite Geomar X3 + Trucha Ahumada Cole’s X3', '<p>Pack contiene 3 latas de Salmón en Aceite Geomar + 3 latas de Trucha Ahumada Cole’s</p>\r\n\r\n', '20990', '0', 'pescado', '0', ''), 
(NULL, 'Salmón Patagónico Cole’s X3 + Trucha Ahumada Cole’s X3', '<p>PPack contiene 3 latas de Salmón Patagónico Ahumado Cole’s + 3 latas de Trucha Ahumada Cole’s</p>', '19690', '0', 'pescado', '0', ''), 
(NULL, 'Pack Salmón Agua X3 + Salmón Merkén X3', '<p>Peso Neto: 170 grs.<p>\r\n\r\n<p>Peso Drenado: 100 grs.<p>\r\n\r\n<p>Pack contiene 3 latas de Salmón en Agua + 3 latas de Salmón Ahumado Merkén.<p>', '14990', '0', 'pescado', '0', ''), 
(NULL, 'Salmón Ahumado Merkén\r\n', '<p>Peso Neto: 170 grs.<p>\r\n\r\n<p>Peso Drenado: 100 grs.<p>', '2750', '0', 'pescado', '0', ''), 
(NULL, 'Salmón en Aceite\r\n', '<p>Peso Neto: 170 grs.<p>\r\n\r\n<p>Peso Drenado: 100 grs.<p>', '2750', '0', 'pescado', '0', ''), 
(NULL, 'Salmón en Agua\r\n', '<p>Peso Neto: 170 grs.<p>\r\n\r\n<p>Peso Drenado: 100 grs.<p>', '2750', '0', 'pescado', '0', '');



CREATE TABLE `pacifig2_pacificharvest.session`.`usuarios` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `usuario` VARCHAR(30) NOT NULL , 
    `password` VARCHAR(120) NOT NULL , 
    `activacion` INT NOT NULL DEFAULT '0' , 
    `token` VARCHAR(40) NOT NULL , 
    `token_password` VARCHAR(40) NULL , 
    `password_request` INT NOT NULL DEFAULT '0' , 
    `id_cliente` INT NOT NULL , PRIMARY KEY (`id`), UNIQUE `uq_usuario` (`usuario`));


CREATE TABLE `pacifig2_pacificharvest.session`.`detalle_compra` (`id` INT NOT NULL AUTO_INCREMENT ,
         `id_compra` INT NOT NULL ,
         `id_producto` INT NOT NULL ,
         `nombre` VARCHAR(200) NOT NULL ,
         `precio` DECIMAL(10,2) NOT NULL ,
         `cantidad` INT NOT NULL ,
         PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `pacifig2_pacificharvest.session`.`compra` (`id` INT NOT NULL AUTO_INCREMENT ,
         `id_transaccion` VARCHAR(20) NOT NULL ,
         `fecha` DATETIME NOT NULL ,
         `status` VARCHAR(20) NOT NULL ,
         `email` VARCHAR(50) NOT NULL ,
         `id_cliente` VARCHAR(50) NOT NULL ,
         `total` DECIMAL(10,2) NOT NULL ,
         PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `pacifig2_pacificharvest.session`.`clientes` (`id` INT NOT NULL AUTO_INCREMENT , 
`nombres` VARCHAR(80) NOT NULL , 
`direccion` VARCHAR(120) NOT NULL , 
`email` VARCHAR(50) NOT NULL , 
`telefono` VARCHAR(20) NOT NULL , 
`dni` VARCHAR(20) NOT NULL , 
`estatus` TINYINT NOT NULL , 
`fecha_alta` DATETIME NOT NULL , 
`fecha_modifica` DATETIME NULL , 
`fecha_baja` DATETIME NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;