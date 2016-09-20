<?php
//$greeting = "Hola" . %_GET['name'] . "!";
//
//require 'index.template.php';
//
//Arrays o vectors
// Estructura de dades:
// Arrays de PHP per a totes les estructures: Maps, Piles, Vectors,etc
//
//$names = array();
//$names = [ 'Manel', 'Xavi', 'Romeu'];
//
////Per vectors llargs utilitzem aquest estil per fer-ho més llegible.
//
//$name1 = "Manel";
//$name2 = "Roman";
//$name3 = "Ramon";
//
//$names = [
//    'Manel',
//    'Xavi',
//    'Romeu'
//];
//
////  Igual que el primer array.
//
//$names2 = [
//    0 => 'Manel',
//    1 => 'Xavi',
//    2 => 'Romeu'
//];
//
////Arrays associatius.
//$persons = [
//    'name' => 'Manel',
//    'sn1' => 'Gavaldà',
//    'sn2' => 'Andreu',
//    'edad' => 20,
//    'married' => false
//];
//
////D'aquesta forma averiguarem poc.
//
////die('Xivato!');
////echo "No s'executa mai!";
//
////Per imprimir un array veurem.
////echo "<pre>";
//// Per depurar i veure el valor de les variables.
////var_dump($names);
////echo "</pre>";
////print_r($names);
////echo $names[0];
////echo $person['sn1'];
//
////$married = true;
////$married = false;
//
//
//Podem indicar al nom de la variable el seu tipus. Però actualment és bastant inútil
//ja que ho podem veure en la declaració.
//
// $v_names =
//
// Tabulant al fore ens donaria el template del foreach.
//Per exemple la funció copy ens retorna un boolea. True si ha sigut correctament.
//Espera un string amb el path d'origen i una destinació, amb un paràmetre opcional
//Entre corxetes és opcional.
//copy($src,$dst);

require 'funcions.php';

require 'Task.php';


//POJO
//POPO
//PLAIN OLD OBJECT
//CONTENEDOR / ESTRUCTURA DE DADES

$task = new Task("Aprendre PHP");

var_dump($task->description);
var_dump($task->completed);

//$task = new Task("Netejar habitació",false);
//$task = new Task("Comprar pa",false);
//$task = new Task("Sortir més");


//$task2 = new Task;
//$task1 = new Task;

//$task = new Task();
$task->complete();
//$task->completed =true;
echo $task->completed?;
var_dump($task);
//require 'index.template.php';
