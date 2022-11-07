<?php

#Obtener IP privada del equipo
#Creado por Triple Yei

$ip = shell_exec("ipconfig");
echo '<pre>' . $ip . '</pre>';

?>