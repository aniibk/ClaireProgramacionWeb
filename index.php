<?php
require_once('encabezado.php');
?>

<body>
    <div id="portada">
        <img src="imagenes/portada-index.jpg" alt="portada-index" class="d-block auto img-fluid pb-3 pt-5">
    </div>

    <div id="Productos">
        <h2>DESTACADOS</h2>


        <?php
        if (isset($_REQUEST['id_marca']))
            $id_marca = $_REQUEST['id_marca'];
        else
            $id_marca = array();

        if (isset($_REQUEST['id_categoria']))
            $id_categoria = $_REQUEST['id_categoria'];
        else
            $id_categoria = array();

        $a_multi_marcas = json_decode(file_get_contents('marcas.json'), true);
        $a_multi_categorias = json_decode(file_get_contents('categorias.json'), true);


        ?>




        <div class="container">

            <div class="row">
                <?php

                $a_productos = json_decode(file_get_contents('productos.json'), true);

                foreach ($a_productos as $a_producto) {
                    if ((in_array($a_producto['id_marca'], $id_marca) || empty($id_marca)) &&
                        ((in_array($a_producto['id_categoria'], $id_categoria) || empty($id_categoria)))
                    ) {
                        if ($a_producto['destacado'] == true) {
                            $pr_id_categoria = $a_producto['id_categoria'];
                            $pr_nombre = $a_producto['nombre_producto'];
                            $pr_id_marca = $a_producto['id_marca'];
                            $pr_id = $a_producto['id_producto'];
                            $pr_im = 'imagenes//' . $pr_id_marca . '//' . $pr_id_categoria . '//' . $pr_id . '.jpg';
                            $pr_precio = $a_producto['precio'];
                ?>

                            <div class="col-12 col-lg-4 col-md-6">
                                <a href="productos.php?id_producto=<?php echo $pr_id ?>"> <img class="img-fluid" src="<?php echo $pr_im ?>"></a>

                                <a href="productos.php?id_producto=<?php echo $pr_id ?>"></a>
                                <p class="text-uppercase"> <?php echo $pr_nombre ?></p>
                                <p><?php echo '$', $pr_precio ?></p>
                                <a href="detalle.php?id_producto=<?php echo $pr_id ?>">Comprar</a>

                            </div>

                <?php
                        }
                    }
                } ?>
            </div>
        </div>

        <h2>NUEVOS</h2>
        <div class="container">
            <div class="row">
                <?php
                foreach ($a_productos as $a_producto) {
                    if ((in_array($a_producto['id_marca'], $id_marca) || empty($id_marca)) &&
                        ((in_array($a_producto['id_categoria'], $id_categoria) || empty($id_categoria)))
                    ) {
                        if ($a_producto['nuevo'] == true) {
                            $pr_id_categoria = $a_producto['id_categoria'];
                            $pr_nombre = $a_producto['nombre_producto'];
                            $pr_id_marca = $a_producto['id_marca'];
                            $pr_id = $a_producto['id_producto'];
                            $pr_im = 'imagenes//' . $pr_id_marca . '//' . $pr_id_categoria . '//' . $pr_id . '.jpg';
                            $pr_precio = $a_producto['precio']; 
                            ?>

                            <div class="col-12 col-lg-4 col-md-6">
                                <a href="productos.php?id_producto=<?php echo $pr_id ?>"> <img class="img-fluid" src="<?php echo $pr_im ?>"></a>

                                <a href="productos.php?id_producto=<?php echo $pr_id ?>"></a>
                                <p class="text-uppercase"> <?php echo $pr_nombre ?></p>
                                <p><?php echo '$', $pr_precio ?></p>
                                <a href="detalle.php?id_producto=<?php echo $pr_id ?>">Comprar</a>

                            </div>
                <?php
                        } else {
                        break;
                        }
                    }
                }
                ?>

            </div>
        </div>
    </div>


</body>
<?php
require_once('pie.php');
?>