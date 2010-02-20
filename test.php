<?php
//actualizar estado en twitter utilizando twitterlibphp http://jdp.github.com/twitterlibphp/doc/
require "twitter.lib.php";
//datos del usuario
$username = "makoamx";
$pass = "makoa123";
//inicializa la clase de twitter
$twitter = new Twitter($username, $pass);
//datos de prueba
$necesito_ofrezco = "Ofrezco";
$mensaje = "Programación en Ruby on Rails";
$usuario = "@usuario_twitter";
///mensaje compuesto
$mensaje_compuesto = $necesito_ofrezco.": ".$mensaje." ".$usuario;
//actualizamos el estado
$estado =  $twitter->updateStatus ($mensaje_compuesto);
?>
