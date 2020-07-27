<?php
 $procsig='P1';
    if($estado=='1')
    {
        foreach($condicional -> result() as $ab){
            $proceso=$ab->codProcesoSI;
             }
    }
    else{
        foreach($condicional -> result() as $ab){
            $proceso=$ab->codProcesoNO;
             }
    }
    header("Location:http://localhost/code/index.php/controlador/index2?procsig=$proceso&btnEnviar=Siguiente");    
?>