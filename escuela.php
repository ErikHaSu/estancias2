<?php
    include('abrir_conexion.php');
    $escuelas = mysqli_query();
?>
<div id="escuela" ></div>
<script type="text/javascript">
    var data = [
    {
        x: ['bloqueo', 'bloqueo', 'bloqueo','bloqueo'],
        y: [20, 14, 23, 27],
        type: 'bar'
    }
    ];
    var layout = {
    title: 'Grafica escuelas'
    };
    Plotly.newPlot('escuela', data);
</script>