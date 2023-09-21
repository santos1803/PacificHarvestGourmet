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


INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `descripcion`, `precio`, `descuento`, `categoria`, `activo`, `created_by`) VALUES 
(NULL, 'Pack Choritos Ahumados en Aceite de Oliva Cole’s (6 unid)', '<p>El pack contiene  6 latas de Choritos Ahumados con Aceite de Oliva .</p>\r\n\r\n<p>Listos para servir, ideales para aperitivos y snacks.</p>\r\n\r\n<p>Peso Drenado: 69 grs. cada uno.</p>', '10490', '0', 'packs', '0', ''), 
(NULL, 'Pack Salmón Ahumado en Aceite de Oliva Cole’s (6 unid)', '<p>El pack contiene 6 latas de Salmón Atlántico Ahumado en Aceite de Oliva Cole’s.</p>\r\n\r\n<p>Listos para servir, ideales para aperitivos y snacks.</p>\r\n\r\n<p>Peso Drenado: 91 grs. cada uno.</p>', '20990', '0', 'packs', '0', ''), 
(NULL, 'Pack Trucha Ahumada en Aceite de Oliva Cole’s (6 Unid)', '<p>El Pack contiene 6 latas de Trucha Ahumada en Aceite de Oliva Cole’s.</p>\r\n\r\n<p>Listos para servir, ideales para aperitivos y snacks.</p>\r\n\r\n<p>Peso Drenado: 91 grs. cada lata</p>', '20990', '0', 'packs', '0', ''), 
(NULL, 'Pack Crema de Jaiba Cole’s (6 unid)', '<p>Pack contiene 6 latas de una deliciosa y delicada sopa de carne de Jaiba Cole’s.</p>\r\n\r\n<p>Lista para calentar y servir.</p>\r\n\r\n<p>Peso Neto: 425 grs</p>', '15990', '0', 'packs', '0', ''), 
(NULL, '3 x 2 Erizos', '<p>Compra 3 y paga 2 estuches de Erizos</p>\r\n\r\n<p>Peso Neto: 110 grs.</p>', '10590', '0', 'packs', '0', ''), 
(NULL, 'Pack Caracoles (6 unid)', '<p>Los caracoles de mar tienen el aspecto delicado de una rosa. Su textura y sabor suave permiten incluirlos tanto en platos fríos como calientes.</p>\r\n\r\n<p>Peso Neto: 110 grs.</p>\r\n\r\n<p>Peso Drenado: 50 grs.</p>\r\n\r\n<p>Pack contiene 6 cajas de Caracoles</p>', '25490', '0', 'packs', '0', ''), 
(NULL, 'Pack Choritos Ahumados con Aceite de Oliva (6 unid)', '<p>Pack contiene 6 estuches de Choritos Ahumados con Aceite de Oliva.</p>\r\n\r\n<p>Peso Neto por estuche: 114 grs.</p>\r\n\r\n<p>Peso Drenado por estuche: 69 grs.</p>', '9990', '0', 'packs', '0', ''), 
(NULL, 'Pack Centolla (6 unid)', '<p>El delicioso sabor y textura de la centolla la convierten en el rey de los crustáceos, lo que sumado a una bella presentación, la hacen ideal para canapés y cualquier tipo de entradas.</p>\r\n\r\n<p>Peso Neto: 190 grs.</p>\r\n\r\n<p>Peso Drenado: 120 grs.</p>', '95990', '0', 'packs', '0', ''), 
(NULL, 'Pack Erizos (6 unid)\r\n', '<p>Pertenecientes a la familia de los equinodermos, de forma semiesférica, contienen en su interior una rica carne de color amarillo anaranjado que reproduce el sabor del mar en forma majestuosa. Ideal para comerlo como entrada, acompañado de unas crujientes tostadas.</p>\r\n\r\n<p>Peso Neto: 110 grs.</p>\r\n\r\n<p>Peso Drenado: 50 grs.</p>\r\n\r\n<p>Pack contiene 6 cajas de Erizos</p>', '25490', '0', 'packs', '0', ''), 
(NULL, 'Pack Locos (6 unid)', '<p>Este apreciado molusco, exclusivo de las costas de Chile, cuenta con un sabor único y una textura firme. Es perfecto para acompañarlo de salsa verde, o en entradas frías o calientes. Cada lata contiene 4 locos.</p>\r\n\r\n<p>Peso Neto 425 grs.</p>\r\n\r\n<p>Peso Drenado: 150grs.</p>', '96990', '0', 'packs', '0', ''), 
(NULL, 'Pack Machas (6 unid)', '<p>Típicas machas chilenas de agua fría. Su bella forma encierra un sabor único y una suave textura, directo desde el frío y puro mar del Sur de Chile.</p>\r\n\r\n<p>Enlatado de Peso Neto: 190 grs.</p>', '40749', '0', 'packs', '0', ''), 
(NULL, 'Pack Navajas (6 unid)', '<p>Las navajas reciben su nombre a partir de la forma de concha, muy similar a las antiguas navajas de afeitar. Su carne tiene un sabor suave, lo que permite consumirlas solas, en ensaladas o con otros aderezos.</p>\r\n\r\n<p>Peso Neto: 110 grs. Peso</p>\r\n\r\n<p>Drenado: 50 grs.</p>\r\n\r\n<p>Pack contiene 6 cajas de Navajas</p>', '25490', '0', 'packs', '0', ''), 
(NULL, 'Pack Navajuelas (6 unid)', '<p>Similares en aspecto a las almejas tradicionales, su textura firme y carnosa las hace ideales para platos calientes, especialmente con aceite de oliva, jugo de limón y estragón.</p>\r\n\r\n<p>Pack contiene 6 cajas de Navajuelas.</p>', '25490', '0', 'packs', '0', ''), 
(NULL, 'Pack Salmón Ahumado Merkén (6 unid)', '\r\n<p>Peso Neto: 170 grs.</p>\r\n\r\n<p>Peso Drenado: 100 grs.</p>\r\n\r\n<p>Pack contiene 6 latas de Salmón Ahumado Merkén</p>', '14990', '0', 'packs', '0', ''), 
(NULL, 'Pack Salmón Aceite (6 unid)', '<p>Peso Neto: 170 grs.</p>\r\n\r\n<p>Peso Drenado: 100 grs.</p>\r\n\r\n<p>Pack contiene 6 latas de Salmón en Aceite</p>', '14990', '0', 'packs', '0', ''), 
(NULL, 'Pack Salmón Agua (6 unid)', '<p>Peso Neto: 170 grs.</p>\r\n\r\n<p>Peso Drenado: 100 grs.</p>\r\n\r\n<p>Pack contiene 6 latas de Salmón en Agua</p>', '14990', '0', 'packs', '0', ''), 
(NULL, 'Salmon en Aceite Geomar X3 + Trucha Ahumada Cole’s X3', '<p>Pack contiene 3 latas de Salmón en Aceite Geomar + 3 latas de Trucha Ahumada Cole’s </p>\r\n\r\n', '20990', '0', 'packs', '0', ''), 
(NULL, 'Salmón Patagónico Cole’s X3 + Trucha Ahumada Cole’s X3', '<p>Pack contiene 3 latas de Salmón Patagónico Ahumado Cole’s + 3 latas de Trucha Ahumada Cole’s</p>\r\n\r\n', '19690', '0', 'packs', '0', ''), 
(NULL, '2 Machas a la Parmesana + Ostiones a la Parmesana', '<p>PRODUCTO DISPONIBLE SOLO PARA REGION METROPOLITANA</p>\r\n\r\n<p>Cada estuche contiene 8 ostiones de selección congelados en media concha, preparados a la parmesana.</p>\r\n\r\n<p>Tan sólo 15 minutos al horno y están listos para servir.</p>\r\n\r\n<p>Peso Neto: 320 grs. (con concha)</p>', '24990', '0', 'packs', '0', ''), 
(NULL, '2 Ostiones a la Parmesana + Machas a la Parmesana', '<p>PRODUCTO DISPONIBLE SOLO PARA REGION METROPOLITANA</p>\r\n\r\n<p>2 estuche de Ostiones a la Parmesana + 1 estuches de Machas a la Parmesana</p>\r\n\r\n<p>Cada estuche de Machas contiene 12 machas de selección congeladas en media concha, preparadas a la parmesana.</p>\r\n\r\n<p>Cada estuche Ostiones contiene 8 ostiones de selección congelados en media concha, preparados a la parmesana.</p>\r\n\r\n<p>Tan sólo 15 minutos al horno y están listos para servir.</p>', '24990', '0', 'packs', '0', ''), 
(NULL, '3 Machas a la Parmesana', '<p>PRODUCTO DISPONIBLE SOLO PARA REGION METROPOLITANA</p>\r\n\r\n<p>Cada estuche contiene 12 machas de selección congeladas en media concha, preparadas a la parmesana.</p>\r\n\r\n<p>Tan sólo 12 minutos al horno y están listas para servir.</p>\r\n\r\n<p>Peso Neto por Estuche: 220 grs. (con concha)</p>', '24990', '0', 'packs', '0', ''), 
(NULL, '3 Ostiones a la Parmesana', '<p>PRODUCTO DISPONIBLE SOLO PARA REGION METROPOLITANA</p>\r\n\r\n<p>Cada estuche contiene 8 ostiones de selección congelados en media concha, preparados a la parmesana.</p>\r\n\r\n<p>Tan sólo 15 minutos al horno y están listos para servir.</p>\r\n\r\n<p>Peso Neto: 320 grs. (con concha)</p>', '24990', '0', 'packs', '0', ''), 
(NULL, 'Pack Salmón Agua X3 + Salmón Merkén X3', '<p>Peso Neto: 170 grs.</p>\r\n\r\n<p>Peso Drenado: 100 grs.</p>\r\n\r\n<p>Pack contiene 3 latas de Salmón en Agua + 3 latas de Salmón Ahumado Merkén.</p>\r\n', '14990', '0', 'packs', '0', ''), 
(NULL, 'Pack Selección 1', '', '19990', '0', 'packs', '0', ''), 
(NULL, 'Pack Selección 2', '<p>Para compartir con la familia y amigos elige tu propio pack selección, eligiendo los productos que más te gustan. Ideales para ensaladas, aperitivos, comidas o snack.</p>\r\n\r\n<p>1 Salmón en Agua + 2 Salmón Ahumado Merkén + 2 Salmón en Aceite + 2 Crema de Jaiba + 1 Trucha Ahumada en Aceite de Oliva + 1 Salmón Ahumado en Aceite de Oliva</p>', '26490', '0', 'packs', '0', ''),
(NULL, 'Pack Selección 3', '<p>Para compartir con la familia y amigos elige tu propio pack selección, eligiendo los productos que más te gustan. Ideales para ensaladas, aperitivos, comidas o snack.</p>\r\n\r\n<p>1 Locos + 1 Navajas + 1 Erizos + 1 Machas + 1 Salmón en Agua + 1 Salmón Ahumado Merkén</p>', '35990', '0', 'packs', '0', ''), 
(NULL, 'Pack Selección 4', '<p>Para compartir con la familia y amigos elige tu propio pack selección, eligiendo los productos que más te gustan. Ideales para ensaladas, aperitivos, comidas o snack.</p>\r\n\r\n<p>2 Locos + 2 Navajas + 1 Machas + 1 Salmón en Agua + 1 Salmón Ahumado Merkén + 1 Salmón en Aceite + 1 Choritos Ahumado en Aceite de Oliva</p>', '56990', '0', 'packs', '0', ''), 
(NULL, 'Pack Selección 5', '<p>Para compartir con la familia y amigos elige tu propio pack selección, eligiendo los productos que más te gustan. Ideales para ensaladas, aperitivos, comidas o snack.</p>\r\n\r\n<p>1 Locos – 1 Centolla – 1 Machas – 1 Erizos – 1 Salmón ahumado merkén – 1 Salmón agua</p>', '45590', '0', 'packs', '0', ''), 
(NULL, 'Pack Selección 6', '<p>Incluye productos nacionales Geomar y los más exquisitos productos de exportación.</p>\r\n\r\n<p>2 Locos + 2 Machas + 2 Erizos</p>\r\n\r\n<p>2 Crema de Jaiba Cole’s + 2 Choritos Ahumados en Aceite de Oliva Cole’s + 2 Trucha Ahumada en Aceite de Oliva Cole’s</p>', '66990', '0', 'packs', '0', ''), 
(NULL, 'Pack Selección 7', '<p>Para compartir con la familia y amigos elige tu propio pack selección, eligiendo los productos que más te gustan. Ideales para ensaladas, aperitivos, comidas o snack.</p>\r\n\r\n<p>2 Locos + 2 Erizos + 2 Navajas + 2 Machas + 2 Salmón en Agua + 2 Salmón Ahumado Merkén + 1 Centolla + 1 Navajuela + 1 Choritos Ahumado en Aceite de Oliva</p>', '89990', '0', 'packs', '0', ''), 
(NULL, 'Pack Selección 8', '<p>Para compartir con la familia y amigos elige tu propio pack selección, eligiendo los productos que más te gustan. Ideales para ensaladas, aperitivos, comidas o snack.</p>\r\n\r\n<p>1 Locos + 1 Erizos + 2 Navajas + 2 Machas + 2 Crema de Jaiba Cole’s + Choritos Ahumados en Aceite de Oliva Cole’s + Trucha Ahumada en Aceite de Oliva Cole’s</p>', '49990', '0', 'packs', '0', ''), 
(NULL, 'Pack Selección 9', '<p>Para compartir con la familia y amigos elige tu propio pack selección, eligiendo los productos que más te gustan. Ideales para ensaladas, aperitivos, comidas o snack.</p>\r\n\r\n<p>1 Locos + 1 Machas a la Parmesana + 1 Ostiones a la Parmesana + 1 Salmón Ahumado Merkén + 1 Salmón en Agua</p>', '35990', '0', 'packs', '0', ''), 
(NULL, 'Pack Selección 10', '<p>Para compartir con la familia y amigos elige tu propio pack selección, eligiendo los productos que más te gustan. Ideales para ensaladas, aperitivos, comidas o snack.</p>\r\n\r\n<p>2 Locos + 2 Machas + 2 Salmón Ahumado Merkén + 2 Salmón en Agua + 1 Erizos + 1 Navajuelas</p>', '62990', '0', 'packs', '0', '');


INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `descripcion`, `precio`, `descuento`, `categoria`, `activo`, `created_by`) VALUES 
(NULL, 'Para Compartir 1', '<p>1 Locos + 1 Centolla + Vino Montes Sauvignon Blanc</p>', '35990', '0', 'para compartir', '0', ''), 
(NULL, 'Para Compartir 2', '<p>2 Erizos Geomar + Vino Montes Reserva Sauvignon Blanc</p>', '12990', '0', 'para compartir', '0', ''), 
(NULL, 'Para Compartir 3\r\n', '<p>2 1 Locos + Vino Casa Silva Sauvignon Blanc</p>', '22990', '0', 'para compartir', '0', ''), 
(NULL, 'Para Compartir 4', '<p>2 2 Machas + Espumante Viñamar Brut</p>', '19990', '0', 'para compartir', '0', ''), 
(NULL, 'Para Compartir 5', '<p>22 Salmón Ahumado Merkén + Espumante Viñamar Brut</p>', '10990', '0', 'para compartir', '0', ''), 
(NULL, 'Para Compartir 6\r\n', '<p>Centolla + Hummus Tomate orégano + Galletas Bocanboca 200 Gr + Espumante Viña Mar</p>', '31990', '0', 'para compartir', '0', ''), 
(NULL, 'Para Compartir 7\r\n', '<p>Loco + Macha + Vino Casa Silva + Brie Los Tilos</p>', '31990', '0', 'para compartir', '0', ''), 
(NULL, 'Para Compartir 8\r\n', '<p>Salmón Ahumado Merquén + Espumante Viña Mar + Galletas Bocanboca 200 Gr</p>', '15990', '0', 'para compartir', '0', '');




INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `descripcion`, `precio`, `descuento`, `categoria`, `activo`, `created_by`) VALUES 
(NULL, 'Tabla Rústica <br> Choritos Ahumados – Salmón Ahumado Merkén\r\n', '<p>Salmón Ahumado Merkén, 170 gr.</p>\r\n\r\n<p>Choritos Ahumados en Aceite de Oliva, 114 gr.</p>\r\n\r\n<p>Tabla Rústica de Madera Nativa 40×20 cms</p>\r\n\r\n<p>Cuchara y Cuchillo de Raulí</p>', '25490', '0', 'regalo', '0', ''), 
(NULL, 'Gift Box <br> Locos – Centolla – Caracoles', '<p>Caja de regalo que contiene 1 tarro de locos (425 grs) + 1 centolla (190 grs) + 1 estuche de Caracoles (110 grs)</p>', '34990', '0', 'regalo', '1', ''), 
(NULL, 'Gift Box <br>\r\nLocos – Centolla – Navajas', '<p>Caja de regalo que contiene 1 tarro de locos (425 grs) + 1 centolla (190 grs) + 1 estuche de Navajas (110 grs) </p>', '34990', '0', 'regalo', '1', ''), 
(NULL, 'Gift Box <br>\r\nLocos – Centolla – Navajuela', '<p>Caja de regalo que contiene 1 tarro de locos (425 grs) + 1 centolla (190 grs) + 1 estuche de Navajuela (110 grs)</p>', '34990', '0', 'regalo', '1', ''), 
(NULL, 'Gift Pack <br>\r\nSalmón – Centolla – Erizo', '<p>Gift pack contenedor de 1 estuche de salmón + 1 estuche de Centolla + 1 estuche de Erizos.</p>\r\n\r\n<p>Peso Neto: 330 grs.(110g x 3)</p>\r\n\r\n<p>Peso Drenado: 150 grs. (50g x 3)</p>', '21990', '0', 'regalo', '0', '');




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