<?php
    foreach($proc -> result() as $pr){
        $p=$pr->codProceso;
        $ps=$pr->codProcesoSiguiente;
    }
?>
<input type="hidden" value=<?php echo $p;?> name='proceso'>
<input type="hidden" value=<?php echo $ps;?> name='procsig'>
<h1>AVERIGUA</h1>
    <h2>FECHAS DE INSCRIPCION</h2>
    <p>Inscripciones VIA INTERNET, mediante el SISTEMA ACADEMICO hasta el 30 de agosto en la siguiente direccion:</p>
    <p>http://informatica.edu.bo</p>
