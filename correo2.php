<?php

$correo = $_POST['email'];
$asunto=$_POST['asunto'];
$msg=$_POST['msg'];
if($asunto ==='' || $correo==='' || $msg===''){
 echo json_encode('Llena los espacios en blanco');
}
else{
    echo json_encode('OK');
}
$contenido=" El correo recibido es: \n $correo,\n El asunto:  $asunto \n y el mensaje: $msg";
//echo " El correo recibido es: $correo, El asunto:  $asunto  y el mensaje: $msg";
//$contenido2="Hola mundo";
if(file_exists("./correo.txt")){
    $edita=fopen("./correo.txt","w+");
    $edita=fopen("./correo.txt","a");
    fwrite($edita,PHP_EOL.$contenido);
    fclose($edita);

}
?>