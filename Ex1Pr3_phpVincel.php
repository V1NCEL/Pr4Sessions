<h4>Exercici01</h4>
<?php
//Declaramos los valores que contendran el Array
$data = array("Name"=>"Vincel","Surname"=>"Cueva","Age"=>"21", "City"=>"Barcelona");
//Decclaramos una variable contador para indicar que posicion del array nos esta mostrando los datos.
$counter = 1;

//Usamos el foreach para pedir que por cada dato del Array nos imprima una linea con todos los datos.
foreach ($data as $x ) {
    //Añadimos la variable contador e idicamos que por cada iteracion incremente de posicion.
    echo  "Data $counter º : $x <br>";
    $counter++;
}

?>
<br>
<h4>Exercici02</h4>
<?php
//Usamos el foreach para recorrer el Array y añadimos la variable clau para posteriormente denominar cada objeto del Array.
foreach($data as $clau=>$valor){
    echo $clau.": ".$valor."<br>";
}

?>
<br>
<h4>Exercici03</h4>
<?php
//Declaramos los valores que contendran el Array
$data = array("Name"=>"Vincel","Surname"=>"Cueva","Age"=>"21", "City"=>"Barcelona");
//Escogemos la posicion del Array que queremos modificar y añadimos el valor nuevo.
$data["Age"] = 24;
//Decclaramos una variable contador para indicar que posicion del array nos esta mostrando los datos.
$counter = 1;

//Usamos el foreach para pedir que por cada dato del Array nos imprima una linea con todos los datos.
foreach ($data as $x ) {
    //Añadimos la variable contador e idicamos que por cada iteracion incremente de posicion.
    echo  "Data $counter º : $x <br>";
    $counter++;
}
?>
<br>
<h4>Exercici04</h4>
<?php
//Declaramos los valores que contendran el Array
$data = array("Name"=>"Vincel","Surname"=>"Cueva","Age"=>"21", "City"=>"Barcelona");
//Escogemos la posicion del Array que queremos modificar y añadimos el valor nuevo.
unset($data["City"]);
//Usamos el var_dump para ver el contenido del Array.
var_dump($data);
?>

<br>
<h4>Exercici05</h4>
<?php
//Declaramos una variable contador para indicar que posicion del array nos esta mostrando los datos.
$counter2 = 6;
//Declaramos los valores que contendran el Array
$letters = ("a,b,c,d,e,f");
//Usamos el array explode para que separe el contenido en comas del array.
$array = explode(",", $letters);
//Usamos la funcion sort y arsort para establecer el orden en el que queremos explotar el Array
rsort($array);
arsort($array);


//Usamos el foreach para pedir que por cada dato del Array nos imprima una linea con todos los datos.
foreach ($array as $x =>$y ) {
    //Añadimos la variable contador e idicamos que por cada iteracion decremente de posicion.
    echo "Letter ".$counter2."º: ".$y."<br>";
    $counter2--;
}


?>
<br>

<h4>Exercici06</h4>
<?php
//Declaramos los valores que contendran el Array
$marks = array("Miguel"=> "5","Luís"=> "7", "Marta"=> "10", "Isabel"=> "8", "Aitor"=> "4", "Pepe"=> "1");
//Usamos la funcion arsort para establecer el orden en el que queremos el Array
arsort($marks);
//Usamos el foreach para pedir que por cada dato del Array nos imprima una linea con todos los datos.
foreach ($marks as $x => $y  ) {
    echo "Students marks: ".$x ." ".$y."<br>";
}
?>
<br>

<h4>Exercici07</h4>
<?php
$marks = array("Miguel"=> "5","Luís"=> "7", "Marta"=> "10", "Isabel"=> "8", "Aitor"=> "4", "Pepe"=> "1");
//Usamos la funcion arsort para establecer el orden en el que queremos el Array
arsort($marks);
//Usamos funciones para hacer los calculos necesarios para calcular la suma y las medias.
$sumMarks = array_sum(array: $marks);
$totalMarks = count($marks);
$realAverage = $sumMarks / $totalMarks;
$average = round($realAverage, 2);
echo "Average marks: ". $average."<br>";
echo "Students above average: <br>";
// Usamos un bucle foreach para que los imprima por pantalla en orden de mayor a menor puntuacion.
foreach($marks as $x => $y  ) {
    echo $x ." ".$y."<br>";
}
?>

<h4>Exercici08</h4>
<?php
$marks = array("Miguel"=> "5","Luís"=> "7", "Marta"=> "10", "Isabel"=> "8", "Aitor"=> "4", "Pepe"=> "1");
//Usamos la funcion arsort para establecer el orden en el que queremos el Array
arsort($marks);
//Usamos foreach para recorrer el array y encontrar el valor mas alto primero y ponemos un break para que deje de ejecutar el for despues de encontrar el valor mas alto e imprimirlo por pantalla.
foreach($marks as $x => $y  ) {
    echo $x ." tiene la nota mas alta con un ".$y."<br>";
    break;
}
?>

