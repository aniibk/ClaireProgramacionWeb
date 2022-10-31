<?php
require_once("encabezado.php");
?>

<body>
    <div id="portada">
        <img src="imagenes/portada-detalle.jpg" alt="portada-productos" class="d-block auto img-fluid pb-3 pt-5">
    </div>

    <h2 class="mt-5 mb-5">MIS PRODUCTOS</h2>
    <hr>
    <?php

    $a_carrito = json_decode(file_get_contents('carrito.json'), true);
    foreach ($a_carrito as $a_carrito) {
        $pr_id = $a_carrito['id_producto'];
        $pr_id_categoria = $a_carrito['id_categoria'];
        $pr_id_marca = $a_carrito['id_marca'];
        $pr_nombre = $a_carrito['nombre_producto'];
        $pr_im = 'imagenes//' . $pr_id_marca . '//' . $pr_id_categoria . '//' . $pr_id . '.jpg';
        $pr_precio = $a_carrito['precio'];
        $pr_marca = $a_carrito['nombre_marca'];
        $pr_categoria = $a_carrito['nombre_categoria'];
        $pr_estado = $a_carrito["estado"];

    ?>

        <div class="container">
            <div class="row">

                <div class="col-2 ">
                    <a href="carrito.php?id_producto=<?php echo $pr_id ?>"> <img class="img-fluid" src="<?php echo $pr_im ?>"></a>
                </div>

                <div class="col-4">
                    <h3 class="text-left"><?php echo $pr_marca ?></h3>
                    <p class="text-uppercase text-left"> <?php echo $pr_nombre ?></p>
                </div>

                <div class="col-3 pt-3">
                    <span>Cant</span>
                    <select name="cantidad" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>

                <div class="col-3 pt-3">
                    <p><strong><?php echo '$ ', $pr_precio ?></strong></p> <br>

                    <p><strong><?php
                                if (in_array($a_carrito, ["estado"], $pr_estado)) {
                                    echo ' ', $pr_estado;
                                } else {
                                    $pr_estado == "Comprado";
                                    echo ' ', $pr_estado;
                                }
                                ?></strong></p>


                </div>


            </div> <!-- row -->
            <hr>


        </div> <!-- container -->

    <?php

    }

    if (empty($a_carrito)) {
    ?>
        <div class="alert alert-warning col align-self-center" role="alert">
            <h2 class=""> No hay productos en el carrito <a href="productos.php" class="alert-link">Haga click aqui para comprar Productos.</a></h2>
        </div>
    <?php
    }
    ?>
    <!-- 
    <div class="container bg-light">

        <div class="row d-flex justify-content-around align-items-center">

            <strong>
                <h4 class="text-uppercase">Total</h4>
            </strong>
            <p class="">$</p>
        </div>
    </div>  container gris-->

    <div class="container">
        <div class="row d-flex justify-content-center">
            
                <form action="" method="post">
                    <button type="submit" name="eliminar" value="eliminar" class="btn btn-outline-secondary mt-3 mr-3 btn-lg">ELIMINAR TODO</button>
                </form>
                <?php
                if (isset($_POST['eliminar'])) {
                    if (isset($a_carrito["id_producto"])) {
                        if (isset($a_carrito["id_producto"])) {
                            unset($a_carrito["id_producto"]);
                            unset($a_carrito["id_categoria"]);
                            unset($a_carrito["id_marca"]);
                            unset($a_carrito["nombre_producto"]);
                            unset($a_carrito["precio"]);
                            unset($a_carrito["nombre_marca"]);
                            unset($a_carrito["nombre_categoria"]);
                            unset($a_carrito["cant"]);
                            unset($a_carrito["estado"]);
                            file_put_contents('carrito.json', json_encode($a_carrito));
                        }
                    }
                }

                ?>
                <form action="" method="post">
                    <button type="submit" name="compra" value="compra" class="btn btn-primary mt-3 btn-lg">CONTINUAR COMPRA</button>
                </form>
                <?php
                if (isset($_POST['compra'])) {

                    echo '<script type="text/javascript">
                    alert("¡Gracias por su compra!");
                    window.location.href="carrito.php";
                    </script>';
                }
                ?>
            </div>
        </div>
    </div>


</body>
<?php
require_once("pie.php");
?>