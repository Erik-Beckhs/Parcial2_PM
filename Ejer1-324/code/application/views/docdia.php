<?php
    foreach($proc -> result() as $pr){
        $ps=$pr->codProcesoSiguiente;
        $p=$pr->codProceso;
    }
?>
<input type="hidden" value=<?php echo $p;?> name='proceso'>
<input type="hidden" value=<?php echo $ps;?> name='procsig'>
<input type="hidden" value=<?php echo $estado;?> name='estado'>
<?php 
    if($estado==1)
    {
        $msg="La presentacion de los documentos fue exitosa!!";
    }
    else{
        $msg="Documentos insuficientes para llevar adelante su inscripcion!!!";
    }
?>
<h1><?= $msg?></h1>