<?php
    foreach($proc -> result() as $pr){
        $p=$pr->codProceso;
    }
    $ps='P1';
?>
<input type="hidden" value=<?php echo $p;?> name='proceso'>
<input type="hidden" value=<?php echo $ps;?> name='procsig'>
<h1>LA INSCRIPCION FINALIZÓ</h1>


