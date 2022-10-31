<?php
require_once('encabezado.php');
?>

<body>
    <div id="portada">
        <img src="imagenes/portada-ojos.jpg" alt="portada-productos" class="d-block auto img-fluid pb-3 pt-5">
    </div>

    <div id="Productos">
        <div class="container"></div>
        <div class="row">

            <aside class="col-2 row">

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

                echo '<form action="" method="get">';
                echo '<ol class="items">';
                echo '<li class="nav-item dropdown list-unstyled">';
                echo '<a class="nav-link dropdown-toggle text-decoration-none" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Marcas</a>';
                echo '<div class="dropdown-menu" aria-labelledby="dropdown01">';
                foreach ($a_multi_marcas as $a_marca) {
                    if (in_array($a_marca['id_marca'], $id_marca)) {
                        $checkar = 'checked="chequed"';
                    } else {
                        $checkar = '';
                    }
                    echo '<a class="dropdown-item text-decoration-none" href=""><input onChange="this.form.submit()" type="checkbox" name="id_marca[]" value = "' . $a_marca['id_marca'] . '"' . $checkar . '>' . $a_marca['nombre_marca'];
                    echo '</a>';
                };
                echo '</div>';
                echo '</li>';

                //Categorías

                echo '<li class="nav-item dropdown list-unstyled">';
                echo '<a class="nav-link dropdown-toggle text-decoration-none" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorías</a>';
                echo '<div class="dropdown-menu" aria-labelledby="dropdown01">';
                foreach ($a_multi_categorias as $a_categoria) {
                    if ($a_categoria['id_categoria'] == 3 || $a_categoria['id_categoria'] == 4 || $a_categoria['id_categoria'] == 5) {
                        if (in_array($a_categoria['id_categoria'], $id_categoria)) {
                            $checked = 'checked="chequed"';
                        } else {
                            $checked = '';
                        }

                        echo '<a class="dropdown-item text-decoration-none" href=""> <input onChange="this.form.submit()" type="checkbox" name="id_categoria[]" value = "' . $a_categoria['id_categoria'] . '" ' . $checked . '>' . $a_categoria['nombre_categoria'];

                        echo '</a>';
                    }
                }
                echo '</div>';
                echo '</li>';
                echo '</ol>';


                ?>
            </aside>

            <h2 class="col-8 pl-5">PRODUCTOS</h2>

        </div>
    </div>


    <div class="container">

        <div class="row">
            <?php

            $a_productos = json_decode(file_get_contents('productos.json'), true);

            foreach ($a_productos as $a_producto) {
                if ((in_array($a_producto['id_marca'], $id_marca) || empty($id_marca)) &&
                    ((in_array($a_producto['id_categoria'], $id_categoria) || empty($id_categoria)))
                ) {
                    if ($a_producto['id_categoria'] == 3 || $a_producto['id_categoria'] == 4 || $a_producto['id_categoria'] == 5) {
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
    </div>

</body>
<?php
require_once('pie.php');
?>