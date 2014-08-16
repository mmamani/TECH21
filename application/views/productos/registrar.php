<form action="" class="form-box" role="form">
    <h2 class="form-signin-heading">Registrar Producto</h2>
    
    <label>Nombre del Producto</label>
    <input type="text" name="nombre" class="form-control">
    
    <br>
    
    <label>Marca</label>
    <input type="text" name="marca" class="form-control">
    
    <br>
    
    <label>Tipo de Producto</label>
    <br>
    <label class="checkbox-inline">
        <input type="radio" name="tipo" value="I"> Insumo
    </label>
    <label class="checkbox-inline">
        <input type="radio" name="tipo" value="F" checked="checked"> Producto final
    </label>
    
    <br><br>
    
    <label>Unidad de Medida</label>
    <select name="unidad" class="form-control">
        <?php foreach($unidades as $unidad) { ?>
        <option value="<?=$unidad->id_unidad?>"><?=$unidad->nombre?></option>
        <?php } ?>
    </select>
    
    <br><br>
    
    <label>Categor&iacute;a</label>
    <select name="unidad" class="form-control">
        <option value="box">Caja</option>
    </select>
    
    <br>
    
    <label>Código del Producto</label>
    <input type="text" name="codigo" class="form-control" placeholder="PRD-001">
    
    <br>
    
    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Guardar">
</form>