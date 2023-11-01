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

ALTER TABLE `pacifig2_pacificharvest.session`.`productos` ADD `name` VARCHAR (200) NOT null AFTER `nombre`; 



INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `name`, `descripcion`, `description`, `precio`, `descuento`, `categoria`, `categorie`, `enlace`, `activo`, `created_by`) VALUES (NULL, 'Almojabana', 'Cheese Bread ', '<p>La almojabana es un panecillo de queso de origen colombiano, hecho con queso fresco, almidón de yuca y maíz. Es conocido por su textura suave y su sabor deliciosamente queso.</p>', '<p>Almojabana is a Colombian cheese bread made with fresh cheese, cassava starch, and corn. It is known for its soft texture and delicious cheesy flavor.</p>', '1', '0', 'alimentos', 'food', '#', '1', '');

INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `name`, `descripcion`, `description`, `precio`, `descuento`, `categoria`, `categorie`, `enlace`, `activo`, `created_by`) VALUES (NULL, 'Buñuelos', 'Doughnut', ' <p>Los buñuelos son bolitas fritas de masa de maíz y queso, muy populares en Colombia. Tienen una textura crujiente por fuera y suave por dentro.</p>', ' <p>Buñuelos are deep-fried dough balls made from cornmeal and cheese, popular in Colombia. They have a crispy exterior and a soft interior.</p>', '1', '0', 'alimentos', 'food', '#', '1', '');

INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `name`, `descripcion`, `description`, `precio`, `descuento`, `categoria`, `categorie`, `enlace`, `activo`, `created_by`) VALUES (NULL, 'PANDEBONOS', 'Casava Bread Mix ', ' <p>Los pandebonos son panecillos de queso colombianos que se elaboran con almidón de yuca y queso fresco. Son conocidos por su sabor deliciosamente queso y su textura crujiente por fuera y suave por dentro.</p>', ' <p>PANDEBONOS are Colombian cheese rolls made with cassava starch and fresh cheese. They are known for their deliciously cheesy flavor and crispy exterior with a soft interior.</p>', '1', '1', 'alimentos', 'food', '#', '', ''), (NULL, 'Abalone', 'Abulon', ' <p>Peso Neto 450 grs</p>', ' <p>Net Weight 450 grs</p>', '1', '1', 'mariscos', 'seafood', '#', '', ''), (NULL, 'Caracoles ', 'Snails', ' <p>Los caracoles de mar tienen el aspecto delicado de una rosa. Su textura y sabor suave permiten incluirlos tanto en platos fríos como calientes</p>\r\n <p>Peso Neto: 110 grs</p>\r\n <p>Peso Drenado: 50 grs</p>', ' <p>: Sea snails have the delicate appearance of a rose. Their texture and mild flavor allow them to be included in both hot and cold dishes.</p>\r\n<p>Net Weight: 110 grs</p>\r\n<p>Drained Weight: 50 grs.</p>', '1', '1', 'mariscos', 'seafood', '#', '1', '');

INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `name`, `descripcion`, `description`, `precio`, `descuento`, `categoria`, `categorie`, `enlace`, `activo`, `created_by`) VALUES (NULL, 'Centolla ', 'King Crab', ' <p>El delicioso sabor y textura de la centolla la convierten en el rey de los crustáceos, lo que sumado a una bella presentación, la hacen ideal para canapés y cualquier tipo de entradas.</p>\r\n <p>Peso Neto: 190 grs</p>\r\n <p>Peso Drenado: 120 grs</p>', ' <p>The delicious flavor and texture of crab make it the king of crustaceans, which, added to its beautiful presentation, makes it ideal for canapés and any type of appetizers.</p>\r\n <p>Net Weight: 190 grs</p>\r\n <p>Drained Weight: 120 grs</p>', '1', '0', 'mariscos', 'seafood', '#', '1', ''), (NULL, 'Erizos ', 'Sea Urchin', ' <p>Pertenecientes a la familia de los equinodermos, de forma semiesférica, contienen en su interior una rica carne de color amarillo anaranjado que reproduce el sabor del mar en forma majestuosa. Ideal para comerlo como entrada, acompañado de unas crujientes tostadas.</p>\r\n <p>Peso Neto: 110 grs</p>\r\n <p>Peso Drenado: 50 grs</p>', ' <p>Belonging to the echinoderm family, they are hemispherical in shape and contain rich orange-yellow meat inside that reproduces the flavor of the sea in a majestic way. Ideal to eat as a starter, accompanied by some crunchy toast.</p>\r\n <p>Net Weight: 110 grs</p>\r\n <p>Drained Weight: 50 grs</p>', '1', '0', 'mariscos', 'seafood', '#', '1', ''), (NULL, 'Locos ', 'Locos ', ' <p>Este apreciado molusco, exclusivo de las costas de Chile, cuenta con un sabor único y una textura firme. Es perfecto para acompañarlo de salsa verde, o en entradas frías o calientes. Cada lata contiene de 3 a 4 locos.</p>\r\n <p>Peso Neto 425 grs</p>\r\n <p>Peso Drenado: 150 grs</p>', ' <p>This appreciated mollusk, exclusive to the coasts of Chile, has a unique flavor and a firm texture. It is perfect to accompany it with green sauce, or in hot or cold appetizers. Each can contains 3 to 4 locos.</p>\r\n <p>Net Weight 425 grs</p>\r\n <p>Drained Weight: 150grs</p>', '1', '0', 'mariscos', 'seafood', '#', '1', '');

INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `name`, `descripcion`, `description`, `precio`, `descuento`, `categoria`, `categorie`, `enlace`, `activo`, `created_by`) VALUES (NULL, 'Machas ', 'Machas ', ' <p>Típicas machas chilenas de agua fría. Su hermosa forma contiene un sabor único y una textura suave, directamente del mar frío y puro del sur de Chile.</p>\r\n <p></p>\r\n <p></p>', ' <p>Typical Chilean cold water machas. Its beautiful shape contains a unique flavor and a soft texture, straight from the cold and pure sea of Southern Chile.</p>\r\n <p>Peso Neto Enlatado: 190 grs</p>\r\n', '1', '0', 'mariscos', 'seafood', '#', '1', '');

INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `name`, `descripcion`, `description`, `precio`, `descuento`, `categoria`, `categorie`, `enlace`, `activo`, `created_by`) VALUES (NULL, 'Ají Chileno ', 'Chilean Chili ', ' <p>El Ají Chileno es una salsa picante elaborada con pimientos rojos, cultivados y cosechados en los soleados y fértiles campos de Chile. Esta salsa añade un toque atrevido y picante a cualquier plato y es perfecta para los amantes del picante.</p>\r\n <p>Ya sea que esté asando unos jugosos filetes o cocinando un lote de chile picante, Ají Chileno llevará sus comidas al siguiente nivel. Está elaborado con ingredientes de calidad y tiene un sabor fresco y brillante que hará las delicias de su paladar. Así que si quieres añadir un poco de picante a tu cocina, ¡prueba Ají Chileno hoy mismo!</p>\r\n <p>Don Juan</p>\r\n <p>240g</p>', ' <p>Chilean Ají is a spicy sauce made with red peppers, grown and harvested in the sunny and fertile fields of Chile. This sauce adds a bold and spicy touch to any dish and is perfect for spicy lovers.</p>\r\n <p>Whether you\'re grilling some juicy steaks or cooking up a batch of spicy chili, Ají Chileno will take your meals to the next level. It is made with quality ingredients and has a fresh and bright flavor that will delight your palate. So if you want to add a little spice to your cooking, try Chilean Ají today!</p>\r\n <p>Don Juan</p>\r\n <p>240g</p>', '1', '0', 'condimentos', 'condiments', '#', '1', ''), (NULL, 'Ají Merkén ', 'Merken Chili', '<p>Experimente el audaz y auténtico sabor de Chile con Ají Merkén, una botella de 100 gramos de salsa picante elaborada con ingredientes naturales de alta calidad, incluido el tradicional ají merkén chileno.</p>\r\n <p>Utilícela como adobo, salsa para mojar o ingrediente de cocina para dar un toque de sabor a cualquier plato. Añada picante a sus platos favoritos o pruebe algo nuevo con la versátil salsa picante Ají Merkén. Pídela ahora y lleva el sabor único de Chile a tu cocina.</p>\r\n <p>Don Juan</p>\r\n <p>100g</p>', '<p>Experience the bold and authentic flavor of Chile with Ají Merkén, a 100-gram bottle of hot sauce made with high-quality natural ingredients, including traditional Chilean ají merkén.</p>\r\n <p>Use as a marinade, dipping sauce, or cooking ingredient to add a touch of flavor to any dish. Add heat to your favorite dishes or try something new with the versatile Ají Merkén hot sauce. Order it now and bring the unique flavor of Chile to your kitchen.</p>\r\n <p>Don Juan</p>\r\n <p>100g</p>', '1', '0', 'condimentos', 'condiments', '#', '1', ''), (NULL, 'Ají Pebre JB ', 'Pebre Jb Chili ', '<p>Presentamos Ají Pebre JB, una salsa picante de pimientos rojos de Chile que desprende calor y sabor en cada gota. Elaborada con los pimientos rojos chilenos más frescos y de mayor calidad, esta salsa añade un toque atrevido y picante a cualquier plato.</p>\r\n <p>Tanto si quiere darle un toque picante a sus tacos, alitas o sopas, esta salsa es el complemento perfecto para su cocina. Ideal para los amantes de la comida picante y especiada. Pruebe Ají Pebre JB hoy mismo y experimente el sabor único y auténtico de Chile. Haga su pedido ahora y condimente su vida con el sabor de Chile.</p>\r\n <p>JB</p>\r\n <p>240g</p>', '<p>Introducing Ají Pebre JB, a spicy red Chile pepper sauce that releases heat and flavor in every drop. Made with the freshest, highest quality Chilean red peppers, this sauce adds a bold and spicy touch to any dish.</p>\r\n <p>Whether you want to add a spicy touch to your tacos, wings or soups, this sauce is the perfect complement to your kitchen. Ideal for lovers of spicy and spicy food. Try Ají Pebre JB today and experience the unique and authentic flavor of Chile. Place your order now and spice up your life with the flavor of Chile.</p>\r\n <p>JB</p>\r\n <p>240g</p>', '1', '0', 'condimentos', 'condiments', '#', '1', ''), (NULL, 'Merkén Molido ', 'Ground Merken', '<p>Presentamos Merkén Molido, un condimento chileno único y sabroso que transformará sus comidas. Hecho con una mezcla de chiles secos y ahumados cuidadosamente seleccionados, este condimento es picante y lleno de sabor audaz.</p>\r\n <p>Utilizado por los mejores chefs de todo el mundo, Merkén Molido se ha convertido en un elemento básico en las cocinas gourmet. Es perfecto para dar un toque picante a sus platos favoritos y puede realzar el sabor de cualquier plato, desde carnes y verduras hasta sopas y guisos.</p>\r\n <p>No se conforme con condimentos ordinarios - ¡eleve su cocina con esta especia chilena de primera calidad hoy mismo!</p>\r\n <p>Edra</p>\r\n <p>15g</p>', '<p>Introducing Merkén Molido, a unique and tasty Chilean condiment that will transform your meals. Made with a blend of carefully selected dried and smoked chiles, this seasoning is spicy and full of bold flavor.</p>\r\n <p>Used by top chefs around the world, Merkén Molido has become a staple in gourmet kitchens. It is perfect for adding a spicy touch to your favorite dishes and can enhance the flavor of any dish, from meats and vegetables to soups and stews.</p>\r\n <p>Don\'t settle for ordinary seasonings - elevate your cooking with this premium Chilean spice today!</p>\r\n<p>Edra</p>\r\n <p>15g</p>', '1', '0', 'condimentos', 'condiments', '#', '1', '');


INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `name`, `descripcion`, `description`, `precio`, `descuento`, `categoria`, `categorie`, `enlace`, `activo`, `created_by`) VALUES (NULL, 'Brevas Arequipe ', 'Figs With Caramel ', '<p>Las brevas con arequipe son higos secos rellenos de dulce de leche (arequipe). Esta combinación crea un sabor agridulce y delicioso.</p>', '<p>Brevas with arequipe are dried figs filled with dulce de leche (arequipe). This combination creates a sweet and tangy flavor.</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Costa Rama', 'Costa Rama', '<p>Costa Rama es una forma deliciosa y única de disfrutar del rico y cremoso sabor del chocolate chileno. Elaborado con los mejores ingredientes, este palito de chocolate se agrupa en delicadas hebras, creando una experiencia que se derrite en la boca como ninguna otra. Disponible en dos deliciosos sabores, chocolate y chocolate blanco, Costa Rama es perfecto para satisfacer sus antojos de chocolate en cualquier momento del día. Ya sea como tentempié o como postre, esta delicia chilena le dejará con ganas de más. ¿Por qué no prueba Costa Rama hoy mismo y descubre el irresistible sabor y textura de esta delicia de chocolate?</p>\r\n<p>Costa</p>\r\n<p>115g</p>', '<p>Costa Rama is a delicious and unique way to enjoy the rich and creamy flavor of Chilean chocolate. Made with the finest ingredients, this chocolate stick is stranded into delicate strands, creating a melt-in-your-mouth experience like no other. Available in two delicious flavors, chocolate and white chocolate, Costa Rama is perfect for satisfying your chocolate cravings at any time of the day. Whether as a snack or dessert, this Chilean delight will leave you wanting more. Why not try Costa Rama today and discover the irresistible flavor and texture of this chocolate delight?</p>\r\n<p>Costa</p>\r\n<p>115g</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Criollitas ', 'Criollitas ', '<p>¿Busca un tentempié delicioso y único? No busque más: las criollitas, las galletas ligeras y crujientes de Chile que seguro satisfarán sus antojos.</p>\r\n<p>Elaboradas con una mezcla especial de harinas y azúcares, las Criollitas son conocidas por su delicada textura y su irresistible sabor. Cada bocado es un equilibrio perfecto de dulzor y crujiente, lo que las convierte en el tentempié ideal para cualquiera que busque algo sabroso y satisfactorio.</p>\r\n<p>Pide Criollitas hoy mismo y experimenta por ti mismo el sabor único y delicioso de estas increíbles galletas.</p>\r\n<p>McKay</p>\r\n<p>100g</p>', '<p>: Looking for a delicious and unique snack? Look no further than criollitas, Chile\'s light and crunchy cookies that are sure to satisfy your cravings.</p>\r\n<p>Made with a special blend of flours and sugars, Criollitas are known for their delicate texture and irresistible flavor. Each bite is a perfect balance of sweet and crunchy, making them the ideal snack for anyone looking for something tasty and satisfying.</p>\r\n<p>Order Criollitas today and experience for yourself the unique and delicious flavor of these incredible cookies.</p>\r\n<p>McKay</p>\r\n<p>100g</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Bocadillo Deportista ', 'Qubit Guava Paste', '<p>El bocadillo deportista es un dulce colombiano hecho de guayaba y panela. Es una fuente de energía popular entre los deportistas.</p>', '<p>Bocadillo deportista is a Colombian sweet made from guava and panela. It is a popular energy source among athletes.</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Bocadillo Deli Manjar ', 'Guava Paste With Caramel', '<p>Deliciosa mezcla de caramelo y pasta de guayaba</p>', '<p>Delicious mixture of caramel and guava paste</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'El Manjar ', 'El Manjar ', '<p>El Manjar de Nestlé es una cremosa y deliciosa crema de caramelo para untar perfecta para añadir un toque de dulzura a tu día. Elaborado con ingredientes de alta calidad, El Manjar ofrece una textura rica y aterciopelada que hará las delicias de tu paladar.</p>\r\n<p>Disfrute de este producto en tostadas, tortitas, gofres o como cobertura de helados y postres. Su sabor suave y decadente es una delicia que no querrá perderse. Experimente el delicioso sabor de El Manjar y dese un capricho dulce y satisfactorio perfecto para cualquier ocasión.</p>\r\n<p>Nestlé</p>\r\n<p>200g</p>', '<p>El Manjar: Nestlé Manjar is a creamy and delicious caramel spread perfect to add a touch of sweetness to your day. Made with high quality ingredients, El Manjar offers a rich and velvety texture that will delight your palate.</p>\r\n<p>Enjoy this product on toast, pancakes, waffles or as a topping for ice cream and desserts. Its smooth and decadent flavor is a delight you won\'t want to miss. Experience the delicious flavor of El Manjar and treat yourself to a sweet and satisfying treat perfect for any occasion.</p>\r\n<p>Nestle</p>\r\n<p>200g</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Costa Frac ', 'Costa Frac ', '<p>¿Buscas un delicioso tentempié que satisfaga a los más golosos? No busques más: ¡Costa Frac! Una deliciosa galleta elaborada con ingredientes de la más alta calidad y disponible en tres apetitosos sabores: Chocolate, Clásica y Vainilla. Cada galleta lleva un relleno cremoso que te hará volver a por más.</p>\r\n<p>Estas galletas se fabrican en Chile y son las favoritas de nuestros clientes. No espere más, pruebe los tres sabores hoy mismo y descubra su nueva galleta favorita. Ya sea para picar algo en casa o para llevar, Costa Frac es la elección perfecta.</p>\r\n<p>Costa</p>\r\n<p>130g</p>', '<p>Are you looking for a delicious snack that will satisfy your sweet tooth? Look no further than Costa Frac! A delicious cookie made with the highest quality ingredients and available in three appetizing flavors: Chocolate, Classic and Vanilla. Each cookie has a creamy filling that will keep you coming back for more.</p>\r\n<p>These cookies are made in Chile and are our customers\' favorites. Don\'t wait any longer, try all three flavors today and discover your new favorite cookie. Whether you want to snack at home or take away, Costa Frac is the perfect choice.</p>\r\n<p>Costa</p>\r\n<p>130g</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Bocadillo Galletin ', 'Wafers With Guava', '<p>Dos obleas con pasta de guayaba en el medio.</p>', '<p>Two wafers with guava paste in the middle.</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Mantecol Clásico ', 'Mantecol Clásico ', '<p>Para los amantes de la mantequilla de maní. Mantecol es un clásico de la repostería chilena. Una barrita de mantequilla de maní sin gluten que seguro te encantará!</p>', '<p>For peanut butter lovers. Mantecol is a classic of Chilean pastries. A gluten-free peanut butter bar that you are sure to love!</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'McKay Alteza ', 'McKay Alteza ', '<p>¡Date un capricho celestial con McKay Alteza! Estos deliciosos barquillos rellenos de crema vienen en cuatro sabores increíbles: Chirimoya, Helado, Fresa y Vainilla. Tanto si te gustan los sabores afrutados como los clásicos de vainilla, McKay Alteza tiene algo para satisfacer tus antojos.</p>\r\n<p>Cada delicioso barquillo relleno de crema se elabora con ingredientes de la más alta calidad y se elabora cuidadosamente para garantizar una experiencia de sabor celestial. Los suaves barquillos envuelven perfectamente el cremoso relleno, creando una deliciosa textura que le dejará con ganas de más.</p>\r\n<p>El sabor Chirimoya es un giro único y tropical del clásico barquillo relleno de nata, con un relleno cremoso y ácido de chirimoya. El sabor Helado es un clásico sabor a helado de vainilla que le transportará a su infancia. El sabor Fresa es una delicia fresca y afrutada con un relleno dulce y ácido de fresa. Y por último, pero no por ello menos importante, el sabor Vainilla es un clásico atemporal, con un rico y cremoso relleno de vainilla que le dejará con ganas de más.</p>\r\n<p>Así que si busca un tentempié delicioso y satisfactorio, ¡pruebe McKay Alteza hoy mismo! Nuestros barquillos rellenos de crema son perfectos para un tentempié rápido sobre la marcha o como un dulce capricho para compartir con amigos y familiares. ¡No se pierda este sabor celestial!</p>\r\n<p>McKay</p>\r\n<p>140g</p>', '<p>Treat yourself in heaven with McKay Alteza! These delicious cream-filled wafers come in four incredible flavors: Custard Apple, Ice Cream, Strawberry and Vanilla. Whether you like fruity flavors or classic vanilla flavors, McKay Alteza has something to satisfy your cravings.</p>\r\n<p>Each delicious cream-filled wafer is made with the highest quality ingredients and carefully crafted to ensure a heavenly tasting experience. The soft wafers perfectly envelop the creamy filling, creating a delicious texture that will leave you wanting more.</p>\r\n<p>The Custard Apple flavor is a unique and tropical twist on the classic cream-filled wafer, with a creamy and tangy custard apple filling. The Ice Cream flavor is a classic vanilla ice cream flavor that will take you back to your childhood. The Strawberry flavor is a fresh and fruity delight with a sweet and tart strawberry filling. And last but not least, the Vanilla flavor is a timeless classic, with a rich and creamy vanilla filling that will leave you wanting more.</p>\r\n<p>So if you\'re looking for a delicious and satisfying snack, try McKay Alteza today! Our cream-filled wafers are perfect for a quick snack on the go or as a sweet treat to share with friends and family. Don\'t miss this heavenly taste!</p>\r\n<p>McKay</p>\r\n<p>140g</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Panela Mini Poloncillos ', 'Mini Brown Sugar Cane', '<p>Mini Caña de Azúcar Caña de Azúcar Producida con Jugo de Caña Deshidratado. </p>', '<p>Mini Sugar Cane Sugar Cane Produced with dehydrated Sugar Cane Juice. </p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Natilla Coco ', 'Coconut natilla ', '<p>La natilla de coco es un postre cremoso a base de coco, conocido por su sabor tropical y textura suave.</p>', '<p>Coconut natilla is a creamy coconut-based dessert, known for its tropical flavor and smooth texture.</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Natilla Con Arequipe ', 'Natilla Con Arequipe ', '<p>La natilla con arequipe es un postre tradicional colombiano que combina natilla (un tipo de flan) con arequipe (dulce de leche).</p>', '<p>Natilla con arequipe is a traditional Colombian dessert that combines natilla (a type of custard) with arequipe (dulce de leche).</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Natilla Con Panela ', 'Natilla Con Panela ', '<p>La natilla con panela es un postre que combina natilla con panela, un producto de azúcar sin refinar. Tiene un sabor dulce y terroso.</p>', '<p>: Natilla con panela is a dessert that combines natilla with panela, an unrefined sugar product. It has a sweet and earthy flavor.</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Oblea Con Arequipe ', 'Oblea Con Arequipe ', '<p>La oblea con arequipe es una deliciosa galleta fina rellena de arequipe (dulce de leche). Es un bocado dulce muy popular en Colombia.</p>', '<p>Oblea con arequipe is a delicious thin wafer filled with arequipe (dulce de leche). It is a popular sweet snack in Colombia.</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Panela Pulverizada ', 'Powdered panela ', '<p>La panela pulverizada es azúcar de caña sin refinar que ha sido molido en polvo. Se utiliza comúnmente como endulzante natural.</p>', '<p>Powdered panela is unrefined cane sugar that has been ground into a fine powder. It is commonly used as a natural sweetener.</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Bocadillos Rollitos Arequipe ', 'Bocadillos rollitos with arequipe ', '<p>Los bocadillos rollitos de arequipe son dulces de guayaba enrollados y rellenos de arequipe (dulce de leche). Son un manjar tradicional colombiano.</p>', '<p>Bocadillos rollitos with arequipe are guava sweets rolled and filled with arequipe (dulce de leche). They are a traditional Colombian delicacy.</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Twist Esparcible De Manjar Blanco Y Guayaba ', 'Twist spread of manjar blanco and guava ', '<p>El twist esparcible de manjar blanco y guayaba es una crema untuosa que combina manjar blanco y guayaba, ideal para untar en pan o galletas.</p>', '<p>Twist spread of manjar blanco and guava is a creamy spread that combines manjar blanco and guava, perfect for spreading on bread or crackers.</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Bocadillo Veleñito ', 'Bocadillo Veleñito ', '<p>El bocadillo veleñito es una especie de dulce de guayaba tradicional de la región de Vélez en Colombia. Se caracteriza por su sabor y textura únicos.</p>', '<p>Bocadillo veleñito is a type of guava sweet traditional to the Vélez region of Colombia. It is known for its unique flavor and texture.</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Bocadillo Veleño rojo ', 'Red veleño bocadillo ', '<p>El bocadillo veleño rojo es una variante del dulce de guayaba de Vélez, Colombia, que se distingue por su color rojo intenso y su sabor agridulce.</p>', '<p>: Red veleño bocadillo is a variant of the guava sweet from Vélez, Colombia, known for its deep red color and sweet-tangy flavor.</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, 'Watt\'s Mermelada ', 'Watt\'s Mermelada ', '<p>La Mermelada Watt\'s es una deliciosa y sabrosa conserva de frutas que añadirá una explosión de dulzor a su desayuno o merienda. Esta mermelada de primera calidad se presenta en siete irresistibles sabores y está elaborada con las frutas más frescas y jugosas. Tanto si la unta en una tostada, la mezcla con yogur o la utiliza como cobertura de sus postres favoritos, la mermelada Watt\'s es la forma perfecta de disfrutar del sabor natural de la fruta fresca. Con su textura suave y aterciopelada y su rico sabor afrutado, este producto chileno es un producto imprescindible para todos los amantes de la fruta. ¿Por qué no te haces con los siete sabores y compruebas por ti mismo lo deliciosa que es la Mermelada Watt\'s?</p>\r\n<p>Watt\'s</p>\r\n<p>250g</p>', '<p>Watt\'s Jam: Watt\'s Jam is a delicious and tasty fruit preserve that will add an explosion of sweetness to your breakfast or snack. This premium jam comes in seven irresistible flavors and is made with the freshest, juiciest fruits. Whether you spread it on toast, mix it with yogurt or use it as a topping for your favorite desserts, Watt\'s jam is the perfect way to enjoy the natural flavor of fresh fruit. With its soft, velvety texture and rich fruity flavor, this Chilean product is a must-have for all fruit lovers. Why not get all seven flavors and see for yourself how delicious Watt\'s Jam is?</p>\r\n<p>Watt\'s</p>\r\n<p>250g</p>', '1', '0', 'dulces', 'candys', '#', '1', ''), (NULL, '', '', '', '', '', '0', '', '', '#', '', '');

INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `name`, `descripcion`, `description`, `precio`, `descuento`, `categoria`, `categorie`, `enlace`, `activo`, `created_by`) VALUES (NULL, 'Besitos ', 'Cassava Snacks ', '<p>Los besitos son pequeñas galletas con forma de beso, generalmente rellenas de arequipe (dulce de leche) o guayaba. Son un dulce tradicional en Colombia.</p>', '<p>Besitos are small kiss-shaped cookies, typically filled with arequipe (dulce de leche) or guava. They are a traditional sweet treat in Colombia.</p>', '1', '0', 'snacks', 'snacks', '#', '1', ''), (NULL, 'Huesillos ', 'Huesillos ', '<p>Prueba Huesillos, ¡un paquete de melocotones deshidratados! Elaborados con melocotones maduros de alta calidad, cuidadosamente seleccionados y deshidratados para conservar su sabor natural, rebosan de dulce y delicioso melocotón.</p>\r\n<p>Los huesillos son un alimento básico en la cocina tradicional chilena y se utilizan habitualmente para preparar la popular bebida Mote con Huesillo. Esta refrescante bebida añade Huesillos a un jarabe dulce con trigo cocido, creando una bebida única y deliciosa perfecta para tomar a sorbos en un caluroso día de verano.</p>\r\n<p>Este producto es perfecto para añadir a sus recetas favoritas, y el cómodo envase con cierre zip mantiene fresco el contenido. ¡Pruébalos hoy mismo y experimenta el delicioso sabor de esta comida tradicional chilena!</p>\r\n<p>Cocina & Co</p>\r\n<p>400g</p>', '<p>Try Huesillos, a package of dehydrated peaches! Made with high quality ripe peaches, carefully selected and dehydrated to preserve their natural flavor, they are bursting with sweet and delicious peach.</p>\r\n<p>Huesillos are a staple in traditional Chilean cuisine and are commonly used to prepare the popular drink Mote con Huesillo. This refreshing drink adds Huesillos to a sweet syrup with cooked wheat, creating a unique and delicious drink perfect for sipping on a hot summer day.</p>\r\n<p>This product is perfect for adding to your favorite recipes, and the convenient zip-closure packaging keeps the contents fresh. Try them today and experience the delicious flavor of this traditional Chilean food!</p>\r\n<p>Kitchen & Co</p>\r\n<p>400g</p>', '1', '0', 'snacks', 'snacks', '#', '1', '');

INSERT INTO `pacifig2_pacificharvest.session`.`productos` (`id`, `nombre`, `name`, `descripcion`, `description`, `precio`, `descuento`, `categoria`, `categorie`, `enlace`, `activo`, `created_by`) VALUES (NULL, 'Chocolate Sahne-Nuss ', 'Sahne-Nuss Chocolate', '<p>Disfruta de tu barra de chocolate chileno favorita! Shane-Nuss es una barra de chocolate dulce con leche cargada de almendras crujientes y amada por los chilenos en todas partes. Ahora podras difrutar este delicioso chocolate con el nuevo sabor de pasas al ron.</p>\r\n<p>Nestlé</p>\r\n<p>250g</p>', '<p>Enjoy your favorite Chilean chocolate bar! Shane-Nuss is a sweet milk chocolate bar loaded with crunchy almonds and loved by Chileans everywhere. Now you can enjoy this delicious chocolate with the new rum raisin flavor.</p>\r\n<p>Nestle</p>\r\n<p>250g</p>', '1', '0', 'dulces', 'candys', '#', '', ''), (NULL, 'Ajo negro ', 'Black garlic ', '<p>El ajo negro es ajo fresco fermentado que se vuelve de color negro y adquiere un sabor suave y dulce. Es conocido por sus propiedades antioxidantes y su uso en la cocina gourmet.</p>', '<p>Black garlic is fresh garlic that has been fermented, turning it black and giving it a mild, sweet flavor. It is known for its antioxidant properties and its use in gourmet cooking.</p>', '1', '1', 'condimentos', 'condiments', '#', '1', '');







-- UPDATE `productos` SET `name` = 'Cheese Bread' WHERE `productos`.`id` = 1;

-- UPDATE `productos` SET `name` = 'Doughnut' WHERE `productos`.`id` = 2;

-- UPDATE `productos` SET `name` = 'Casava Bread Mix' WHERE `productos`.`id` = 3;

-- UPDATE `productos` SET `name` = 'Abulón' WHERE `productos`.`id` = 4;

-- UPDATE `productos` SET `name` = 'Snails' WHERE `productos`.`id` = 5;

-- UPDATE `productos` SET `name` = 'King Crab' WHERE `productos`.`id` = 6;

-- UPDATE `productos` SET `name` = 'Sea Urchin' WHERE `productos`.`id` = 7;

-- UPDATE `productos` SET `name` = 'Locos' WHERE `productos`.`id` = 8;

-- UPDATE `productos` SET `name` = 'Machas' WHERE `productos`.`id` = 9;

-- UPDATE `productos` SET `name` = 'Chilean Chili' WHERE `productos`.`id` = 10;

-- UPDATE `productos` SET `name` = 'Merken Chili' WHERE `productos`.`id` = 11;

-- UPDATE `productos` SET `name` = 'Pebre Jb Chili' WHERE `productos`.`id` = 12;

-- UPDATE `productos` SET `name` = 'Ground Merken' WHERE `productos`.`id` = 13;

-- UPDATE `productos` SET `name` = 'Figs With Caramel' WHERE `productos`.`id` = 14;

-- UPDATE `productos` SET `name` = 'Costa Rama' WHERE `productos`.`id` = 15;

-- UPDATE `productos` SET `name` = 'Criollitas' WHERE `productos`.`id` = 16;

-- UPDATE `productos` SET `name` = 'Qubit Guava Paste' WHERE `productos`.`id` = 17;

-- UPDATE `productos` SET `name` = 'Guava Paste With Caramel' WHERE `productos`.`id` = 18;

-- UPDATE `productos` SET `name` = 'El Manjar' WHERE `productos`.`id` = 19;

-- UPDATE `productos` SET `name` = 'Costa Frac' WHERE `productos`.`id` = 20;

-- UPDATE `productos` SET `name` = 'Wafers With Guava' WHERE `productos`.`id` = 21;

-- UPDATE `productos` SET `name` = 'Mantecol Clásico' WHERE `productos`.`id` = 22;

-- UPDATE `productos` SET `name` = 'McKay Alteza' WHERE `productos`.`id` = 23;

-- UPDATE `productos` SET `name` = 'Mini Brown Sugar Cane' WHERE `productos`.`id` = 24;

-- UPDATE `productos` SET `name` = 'Cornstarch Custard Coconut' WHERE `productos`.`id` = 25;

-- UPDATE `productos` SET `name` = 'Cornstarch Custard Arequipe' WHERE `productos`.`id` = 26;

-- UPDATE `productos` SET `name` = 'Cornstarch Custard Cane Sugar' WHERE `productos`.`id` = 27;

-- UPDATE `productos` SET `name` = 'Wafers With Arequipe' WHERE `productos`.`id` = 28;

-- UPDATE `productos` SET `name` = 'Powdered Cane Sugar' WHERE `productos`.`id` = 29;

-- UPDATE `productos` SET `name` = 'Guava Paste With Caramel' WHERE `productos`.`id` = 30;

-- UPDATE `productos` SET `name` = 'Caramel Spread With Guava Jelly' WHERE `productos`.`id` = 31;

-- UPDATE `productos` SET `name` = 'Guava Paste' WHERE `productos`.`id` = 32;

-- UPDATE `productos` SET `name` = 'Red Guava Paste' WHERE `productos`.`id` = 33;

-- UPDATE `productos` SET `name` = 'Watt\'s Jam' WHERE `productos`.`id` = 34;

-- UPDATE `productos` SET `name` = 'Cassava Snacks' WHERE `productos`.`id` = 35;

-- UPDATE `productos` SET `name` = 'Huesillos' WHERE `productos`.`id` = 36;

-- UPDATE `productos` SET `name` = 'Sahne-Nuss Chocolate (Rum With Rainsis)' WHERE `productos`.`id` = 37;



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