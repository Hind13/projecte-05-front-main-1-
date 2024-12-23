<?php
include ('header.php');
//registrarse-information -->

//registrarse -information

//Creamos el xml de
//$xml = new SimpleXMLElement('<peticion/>');
$registrar = $xml->addChild('registrar');
$registrar->addChild('transactionID', $_GET["transactionID"]);
$client = $registrar->addChild('client');
$client->addChild('DNI', $_GET["DNI"]);
$client->addChild('name', $_GET["name"]);
$client->addChild('surname', $_GET["surname"]);
$client->addChild('phone', $_GET["phone"]);
$client->addChild('email', $_GET["email"]);
$xml->asXML('./debug/registrar.xml');

//guardamos el xml de registrar en un un fichero para debug
//enviamos el xml de registrar al web service

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/registrar?xml=" . urlencode($xml->asXML()));
curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/registrar?xml=" . urlencode($xml->asXML()));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPGET, 1);
$output = curl_exec($ch);
curl_close($ch);
//PROCESAMOS LA RESPUESTA
$xml = new SimpleXMLElement($output);
if($xml->getName() == "error"){
    echo "<h1>" ."HA OCURRIDO UN ERROR". "</h1>";
    echo "<p>" . $xml->msg . "</p>";
    //Link to go back to the index page
    echo "<a href='index.php'>Volver</a>";
} else {
    echo "<h1>" ."OPERACION REALIZADA CON EXITO"."</h1>";
    echo "<p>" ."Consulte su correo electrónico para más información". "</p>";
    echo "<p> Puede cerrar esta ventana</p>";
    echo "<p>El mensaje que se ha recibido del servidor es: " . $xml->registrar->msg . "</p>";
}
//////////////////////////////////////////////////////

$dni=$_post['dni'];
$name=$_post['name'];
$surname=$_post['surname'];
$phone=$_post['phone'];
$email=$_post['email'];
$password=$__post['password'];




include ('footer.php');
?>