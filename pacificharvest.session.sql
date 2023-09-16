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