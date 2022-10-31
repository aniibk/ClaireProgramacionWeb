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
$a_multi_subCategorias = json_decode(file_get_contents('subCategorias.json'), true);
echo '<pre>';
print_r($a_multi_marcas);
echo '</pre>';
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
echo '<a class="dropdown-item text-decoration-none" href=""><input onChange="this.form.submit()" type="checkbox" name="id_marca[]" value = "'.$a_marca['id_marca'] .'"'.$checkar.'>'.$a_marca['nombre_marca'];
echo '</a>';


};
echo '</div>';
echo '</li>';

//Categorías

echo '<li class="nav-item dropdown list-unstyled">';
echo '<a class="nav-link dropdown-toggle text-decoration-none" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorías</a>';
echo '<div class="dropdown-menu" aria-labelledby="dropdown01">';
foreach ($a_multi_categorias as $a_categoria) {
    if (in_array($a_categoria['id_categoria'], $id_categoria)) {
        $checked = 'checked="chequed"';
    } else {
        $checked = '';
    }
}
    $a_multi_productos = json_decode(file_get_contents('productos.json'), true);
 foreach ($a_multi_productos as $a_producto) {
     if ( ( in_array($a_producto['id_marca'],$id_marca) || empty($id_marca) ) &&
        ( ( in_array($a_producto['id_categoria'],$id_categoria) || empty($id_categoria) )))
     {
        echo '<pre>';
        print_r($a_producto);
        echo '</pre><hr>';
     }
 }
?>