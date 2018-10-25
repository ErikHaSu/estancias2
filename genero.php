<?php
    include('conexion.php');
    $link = conect();
    $con = mysql_query("SELECT * FROM puntajes",$link);
    $masc = mysql_query("SELECT id_puntaje FROM participantes WHERE sexo = 'M",$link);
    $fem = mysql_query("SELECT id_puntaje FROM participantes WHERE sexo = 'F",$link);

/*SELECT puntajes.id_puntaje,participantes.sexo, puntajes.act1, puntajes.act2, puntajes.act3
FROM puntajes WHERE sexo = 'F'
INNER JOIN participantes ON puntajes.id_puntaje=participantes.id;*/
?>
