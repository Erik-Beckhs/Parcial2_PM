<?php
    foreach($proc -> result() as $pr){
        $ps=$pr->codProcesoSiguiente;
        $p=$pr->codProceso;
    }
?>
<h1>PRESENTAR DOCUMENTOS</h1>
<input type="hidden" value=<?php echo $p;?> name='proceso'>
<input type="hidden" value=<?php echo $ps;?> name='procsig'>
<table><tr>
<td><label>Cedula de Identidad: </label></td>
<td>
<input type="text" name='ci'></td>
</tr>
<tr>
<td><label>Certificado PSA</label></td>
<td><select name="psa">
    <option value="0">NO</option>
    <option value="1">SI</option>
</select></td></tr>
<tr>
<td><label>Titulo de Bachiller</label></td>
<td>
<select name="titulo">
    <option value="0">NO</option>
    <option value="1">SI</option>
</select></td></tr>
<tr>
<td><label>Boleta de Deposito</label></td>
<td>
<select name="boleta">
    <option value="0">NO</option>
    <option value="1">SI</option>
</select></td></tr>
<tr><td>
<label>Matricula 2020</label></td>
<td>
<select name="matricula">
    <option value="0">NO</option>
    <option value="1">SI</option>
</select></td>
</tr>
</table>
