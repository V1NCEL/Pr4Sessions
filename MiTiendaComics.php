<?php
// Definición del inventario de cómics
$inventario = [
    'suspense_terror' => [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
    // Puedes agregar más categorías y cómics según sea necesario
];

// main
// antes descuento
mostrarComicsEnTabla();
mostrarValorAlmacen();
aplicarDescuentoManga();
// mostramos el inventario actualizado
mostrarComicsEnTabla();
mostrarValorAlmacen();

function mostrarComicsEnTabla()
{
    global $inventario;
    echo '<br>';
    echo '<table border="1">';
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }

    echo '</table>';
}

function mostrarValorAlmacen()
{
    global $inventario;
    //inicializamos variable que contiene valor.
    $totalValue = 0;

//Bucle que recorre las categorias del array
    foreach ($inventario as $categoria=> $comics) {
        //bucle que recorre los comics que hay por categoria
        foreach ($comics as $comic) {
            ///formula que multiplica el precio por el stock y almacena el valor en una variable
        $totalValue += $comic['stock']*$comic['precio'];
        
            
        }
        
    }
    echo "El valor del almacen es de: ".$totalValue."€";
}


function aplicarDescuentoManga()
{
    global $inventario;

    //Bucle que recorre las categorias del array
    foreach ($inventario as $categoria=> &$comics) {
        //bucle que recorre los comics que hay por categoria
        foreach ($comics as &$comic) {
            //Aplica el descuento solo si el idioma es japones y no por categoria.
        if ($comic['idioma'] == 'Japonés') {
            $comic['precio'] = $comic['precio'] * 0.7; // Aplicar descuento del 30%
        }
    }
}
}
?>


