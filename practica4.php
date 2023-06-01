<?php
$nombre = $_POST["nombre"];
$calificacion = 0;

$pregunta1 = $_POST["pregunta1"];
$pregunta2 = $_POST["pregunta2"];
$pregunta3 = $_POST["pregunta3"];
$pregunta4 = $_POST["pregunta4"];
$pregunta5 = $_POST["pregunta5"];
$pregunta6 = $_POST["pregunta6"];
$pregunta7 = $_POST["pregunta7"];
$pregunta8 = $_POST["pregunta8"];
$pregunta9 = $_POST["pregunta9"];
$pregunta10 = $_POST["pregunta10"];

echo "<h3>Pregunta 1, respuesta seleccionada: (".$pregunta1.")</h3>";

if($pregunta1 == "c"){
    $calificacion ++;
}else if($pregunta1 == "a"){
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}else{
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}

if($pregunta2 == "c"){
    $calificacion ++;
}else if($pregunta2 == "a"){
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}else{
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}

if($pregunta3 == "b"){
    $calificacion ++;
}else if($pregunta3 == "a"){
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}else{
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}

if($pregunta4 == "c"){
    $calificacion ++;
}else if($pregunta4 == "a"){
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}else{
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}

if($pregunta5 == "b"){
    $calificacion ++;
}else if($pregunta5 == "a"){
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}else{
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}

if($pregunta6 == "a"){
    $calificacion ++;
}else if($pregunta6 == "b"){
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}else{
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}

if($pregunta7 == "a"){
    $calificacion ++;
}else if($pregunta7 == "b"){
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}else{
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}

if($pregunta8 == "b"){
    $calificacion ++;
}else if($pregunta8 == "a"){
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}else{
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}

if($pregunta9 == "c"){
    $calificacion ++;
}else if($pregunta9 == "a"){
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}else{
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}

if($pregunta10 == "a"){
    $calificacion ++;
}else if($pregunta10 == "b"){
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}else{
    echo "<p>Incorrecto, la respuesta es (c)</p>";
}

if($calificacion =< 5){
    echo"<h3>Calificación:".calificacion.", No aprobaste papi</h3>";
}else if($calificacion>=6 && $calificacion<=8){
    echo"<h3>Calificación:".calificacion.", De pansazo cabron, éxito</h3>";
}else if($calificacion>=9){
    echo"<h3>Calificación:".calificacion.", Eres una bergota we hazme tuyo</h3>";
}
php?>