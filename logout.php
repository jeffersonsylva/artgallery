<?php

// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($IdConexion);

setcookie("username",'',1);
setcookie("password",'',1);

header('Location: index.php');

?>