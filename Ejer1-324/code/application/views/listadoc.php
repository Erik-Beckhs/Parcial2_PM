<?php
    foreach($proc -> result() as $pr){
        $ps=$pr->codProcesoSiguiente;
        $p=$pr->codProceso;
    }
?>
<input type="hidden" value=<?php echo $p;?> name='proceso'>
<input type="hidden" value=<?php echo $ps;?> name='procsig'>
<h1>LISTADO</h1>
    <h2>Lista de requisitos:</h2>
    <ul>
        <li>Certificado de aprobacion PSA</li>
        <li>Titulo de Bachiller</li>
        <li>Boleta de deposito</li>
        <li>Matriculacion 2020</li>
    </ul>
