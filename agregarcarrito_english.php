<?php

//Configuracion para que el frontend se conecte con la base de datos, y el usuarion pueda ver los productos que agrego al carrito

require './php/config.php';
require './php/dtbbase.php';
$db = new Database();
$con = $db->conectar();

$productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;
/*session_destroy();*/
/*print_r($_SESSION);*/

$lista_carrito = array();

if ($productos != null) {
    foreach ($productos as $clave => $cantidad) {
        $sql = $con->prepare("SELECT id, nombre, precio, descuento, $cantidad AS cantidad FROM productos WHERE id=? AND activo=1  ");
        $sql->execute([$clave]);
        $lista_carrito[] = $sql->fetch(PDO::FETCH_ASSOC);
    }
}



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/carritocompras.css">
    <link rel="stylesheet" href="./responsive_css/agregarcarrito.css">

    <title>Pacific Harvest Gourmet</title>
</head>

<body>
    <!--Cabecera de la pagina-->
    <!-- <header>
        <nav>
            <section id="carrito">


                <a href="agregarcarrito.php" id="log2"><img
                        src="https://img.icons8.com/ios/50/000000/shopping-bag--v1.png" alt="shopping-bag--v1" /></a>
                <?php if ($num_cart > 0) { ?>
                    <span id="num_cart" class="badge bg-secondary carritosss">
                        <?php echo $num_cart; ?>
                    </span>
                <?php } else { ?>
                    <span id="num_cart" class="badge bg-secondary carritosss"></span>
                <?php } ?>
            </section>
            <section class="" id="iniciarSesion">
                    <?php if (isset($_SESSION['user_id'])) { ?>

                        <div class="dropdown mb-1">
                            <button class="btn btn-ligth btn-sm dropdown-toggle" type="button" id="btn_session" data-bs-toggle="dropdown" aria-expanded="false">

                                <?php echo $_SESSION['user_name']; ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btn_session">
                                <li><a class="dropdown-item" href="compras.php">Mis compras</a></li>
                                <li><a class="dropdown-item" href="logout.php">Cerrar sesion</a></li>
                            </ul>
                        </div>

                    <?php } else { ?>
                        <a href="login.php" class="btn ms-2" style="margin: 0 15px 5px 0"><img src="./recursos/icons8-account-64.png" alt="" width="35px"></a>
                    <?php } ?>

                </section>
        </nav>
    </header> -->


    <!--FIN Cabecera de la pagina-->


    <!--Contenedor vacio para espacio entre el header y banner principal-->

    <div id="vacio">

    </div>
    <!--FIN Contenedor vacio para espacio entre el header y banner principal-->




    <!--BANNER PRINCIPAL PARA LA SECCION DE MARISCOS-->

    <div class="containerMariscos ">


    </div>

    <!--FIN BANNER PRINCIPAL PARA LA SECCION DE MARISCOS-->








    <!---Seccion para mostrar productos en el carrito-->

    <div class="carritoCompras" style="border: 1px solid red">
        <h1>Shopping Cart</h1>
        <section class="carritoCompras_tablas">
            <table>
                <thead>
                    <?php if ($lista_carrito == null) { ?>
                        <tr></tr>
                    <?php } else { ?>
                        <tr class="trHead">
                            <th></th>
                            <th id="productoss">Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                    <?php } ?>
                </thead>
                <tbody>
                    <!--Consulta para que si la variable lista de carrito es nula, entonces me muestre la tabla vacia y sino me traiga los datos que estoy solicitando y me los muestre en el orden correspondiente-->


                    <?php if ($lista_carrito == null) {
                        echo "<tr></tr>";
                    } else {
                        $total = 0;
                        foreach ($lista_carrito as $producto) {

                            $_id = $producto["id"];
                            $nombre = $producto["nombre"];
                            $precio = $producto["precio"];
                            $descuento = $producto["descuento"];
                            $cantidad = $producto["cantidad"];
                            $precio_desc = $precio - (($precio * $descuento) / 100);
                            $subtotal = $cantidad * $precio_desc;
                            $total += $subtotal;
                            $img = "";
                            

                            ?>
                            <tr class="trBody">
                                <td>
                                    <?php

                                    $_id = $producto["id"];
                                    $img = "./images/productos/" . $_id . "/principal.jpg";
                                    
                                    if (!file_exists($img))
                                        $img = "./images/no-img.png"
                                    ?>
                                        <a href=""><img src="<?php echo $img; ?>" width="52px"></a>
                                </td>

                                <td id="tproductoss">
                                    <?php echo $nombre; ?>
                                </td>
                                <td>
                                    <?php echo MONEDA . number_format($precio_desc, 2, ".", ","); ?>
                                </td>
                                <td>
                                    <input class="increment" type="number" min="1" max="15" step="1"
                                        value="<?php echo $cantidad ?>" size="5" id="cantidad <?php $_id; ?>"
                                        onchange="actualizaCantidad(this.value, <?php echo $_id; ?>)">
                                </td>
                                <td>
                                    <div id="subtotal_<?php echo $_id; ?>" name="subtotal[]">
                                        <?php echo MONEDA . number_format($subtotal, 2, ".", ","); ?>
                                    </div>
                                </td>
                                <td><a id="eliminar" class="btn  btn-sm" data-bs-id="<?php echo $_id; ?>" data-bs-toggle="modal"
                                        data-bs-target="#eliminaModal"><img src="./recursos/delete-svgrepo-com.svg" alt=""
                                            width="50px"></a></td>
                            </tr>
                        <?php } ?>

                        <tr>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total_carritoCompra">
                                <h3 id="total">
                                    <?php echo MONEDA . number_format($total, 2, ".", ","); ?>
                                </h3>
                            </td>
                        </tr>

                    </tbody>
                <?php } ?>
            </table>
        </section>

        <!--Validacion para que en el momento de dar click en el boton comprar, si el usuario no esta logueado que lo redirija al login de la pagina y si ya esta logueado, le permita comprar-->
        <?php if ($lista_carrito !== null) { ?>
            <article class="forBuy">
                <?php if (isset($_SESSION['user_cliente'])) { ?>
                    <!-- <a href="#">COMPRAR</a> -->
                    <a href="./pagar_english.php">BUY NOW</a>
                <?php } else { ?>
                    <!-- <a href="#">COMPRAR</a> -->
                    <a href="./login_english.php?pago">BUY NOW</a>
                <?php } ?>
            </article>
        <?php } ?>
    </div>

    <!---Fin de Seccion para mostrar productos en el carrito-->





    <!-- fin del formulario de contacto -->
    <!-- <footer>

        <div class="container">


            <div class="footer3">
                <div>
                    <a href="../html/index_english.php"><img src="../recursos/SVGLogo.svg" alt=""></a>
                </div>
                <div>
                    <p></p>
                </div>
            </div>

        </div>
    </footer> -->


    <!--FIN  footer-->



    <!-- Modal de alerta para cuando un producto de la lista sea eliminado -->
    <div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eliminaModalLabel">Alert</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Do you want to remove this product from the list?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="btn-elimina" type="button" class="btn btn-danger" onclick="eliminar()">Delete</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Termino  Modal -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>




    <!--Script para que el modal aparezca al darle click al boton de eliminar, y tanto la cantidad de productos, subtotal y total sean actualizados, tambien aqui se define que al momento de aumentar la cantidad de algun producto, el subtotal y total cambien-->
    <script>
        let eliminaModal = document.getElementById('eliminaModal')
        eliminaModal.addEventListener('show.bs.modal', function (event) {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')
            let buttonElimina = eliminaModal.querySelector('.modal-footer #btn-elimina')
            buttonElimina.value = id
        })


        function actualizaCantidad(cantidad, id) {

            let url = './clases/actualizar_carrito.php'
            let formData = new FormData()
            formData.append('action', 'agregar')
            formData.append('id', id)
            formData.append('cantidad', cantidad)

            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors',
            }).then(response => response.json())
                .then(data => {
                    if (data.ok) {

                        let divsubtotal = document.getElementById('subtotal_' + id)
                        divsubtotal.innerHTML = data.sub

                        let total = 0.00
                        let list = document.getElementsByName('subtotal[]')

                        for (let i = 0; i < list.length; i++) {
                            total += parseFloat(list[i].innerHTML.replace(/[$,]/g, ''))
                        }

                        total = new Intl.NumberFormat('en-US', {
                            minimunFractionDigits: 2
                        }).format(total)
                        document.getElementById('total').innerHTML = '<?php echo MONEDA; ?>' + total


                    }
                })
        }

        function eliminar() {

            let botonElimina = document.getElementById('btn-elimina')
            let id = botonElimina.value

            let url = './clases/actualizar_carrito.php'
            let formData = new FormData()
            formData.append('action', 'eliminar')
            formData.append('id', id)


            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors',
            }).then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        location.reload()

                    }
                })
        }
    </script>
</body>

</html>