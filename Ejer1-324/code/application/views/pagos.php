<?php
    foreach($proc -> result() as $pr){
        $p=$pr->codProceso;
    }
    $ps='P1';
?>
<input type="hidden" value=<?php echo $p;?> name='proceso'>
<input type="hidden" value=<?php echo $ps;?> name='procsig'>
<h1>PAGOS</h1>
    <h2>PUEDE REALIZAR SU PAGO EN LAS SIGUIENTES ENTIDADES AUTORIZADAS</h2>
    <ul>
        <li>Banco Union</li>
        <li>Banco Prodem</li>
        <li>Banco Sol</li>
        <li>Banco Nacional de Bolivia</li>
        <li>Banco Mercantil Santa Cruz</li>
    </ul>
