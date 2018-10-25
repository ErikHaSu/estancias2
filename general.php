<?php
    include('abrir_conexion.php');
    //La variable total contiene la cantidad total de puntajes en la tabla puntajes con el alias total
    $total = mysqli_query($link, "SELECT count(*) as total FROM puntajes");
    /*La variable datos guarda la cantidad total de puntajes de la tabla puntajes y necesita el alias total
    para poder hacer referencia a alguna tabla*/
    $datos = mysqli_fetch_assoc($total);
    //La variable cons contiene los datos de la tabla puntajes 
    $cons = mysqli_query($link, "SELECT * FROM puntajes");
?>
<div id="general" ></div>
<script type="text/javascript">
var data = [{
  values:
    <?php
    while ($row = mysqli_fetch_array($cons)) {
        
        $contador += $row['act1'];
        $prom = $contador / $datos['total'];

        $contador2 += $row['act2'];
        $prom2 = $contador2 / $datos['total'];

        $contador3 += $row['act3'];
        $prom3 = $contador3 / $datos['total'];
    }
    echo "['$prom',".$prom2.",'$prom3'],";

    include('cerrar_conexion.php');
    ?>
  labels: ['Actividad1', 'Actividad2','Actividad3'],
  type: 'pie'
}];

var layout = {
    title: 'Grafica de puntaje general',
    height: 400,
    width: 500
};

Plotly.newPlot('general', data, layout);
</script>