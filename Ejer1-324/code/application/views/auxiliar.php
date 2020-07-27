<?php
        foreach($abc -> result() as $al){
            ?>
                <ul>
                <li><?php $flujo=$al->codFlujo;
                        $proceso=$al->codProceso;
                        $ps=$al->codProcesoSiguiente;
                        $pantalla=$al->pantalla;
                ?></li>
                </ul>
            <?php
    }
        header("Location:http://localhost/code/index.php/controlador/?flujo=$flujo&proceso=$proceso&procsig=$ps&pantalla=$pantalla&estado=$sw");    
?>