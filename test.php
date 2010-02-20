<?php

//actualizar estado en twitter utilizando twitterlibphp http://jdp.github.com/twitterlibphp/doc/
require "twitter.lib.php";
$username = "makoamx";
$pass = "makoa123";
echo "ok";

//inicializa la clase de twitter
$twitter = new Twitter($username, $pass);
$estado =  $twitter->updateStatus ("plantilla @user necesito/ofrezco algo");
 




?>
