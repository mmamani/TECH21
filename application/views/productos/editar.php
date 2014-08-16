<form action="productos/guardar<?= isset($producto) ? "/$producto->id_producto" : "" ?>" method="post" class="form-box" role="form">
    <h2 class="form-signin-heading"><?=$title?></h2>
    
    <label>Nombre del Producto</label>
    <input type="text" name="nombre" class="form-control" <?= isset($producto) ? "value=\"$producto->nombre\"" : "" ?>>
    	
    <br>
    
    <label>Marca</label>
    <input type="text" name="marca" class="form-control" <?= isset($producto) ? "value=\"$producto->marca\"" : "" ?>>
    
    <br>
    
    <label>Tipo de Producto</label>
    <br>
    <label class="checkbox-inline">
        <input type="radio" name="tipo_producto" value="I" >  Insumo
    </label>
    <label class="checkbox-inline">
        <input type="radio" name="tipo_producto" value="F" checked="checked"> Producto final
    </label>
    
    <br><br>
    
    <label>Unidad de Medida</label>
    <select name="id_unidad" class="form-control">
        <?php foreach($unidades as $unidad) { ?>
        <option value="<?=$unidad->id_unidad?>"><?=$unidad->nombre?></option>
        <?php } ?>
    </select>
    
    <br><br>
    
    <label>Categor&iacute;a</label>
    <select name="id_categoria" class="form-control">
        <option value="box">Caja</option>
    </select>
    
    <br>
    
    <label>Código del Producto</label>
    <input type="text" name="codigo" class="form-control" placeholder="PRD-001" <?= isset($producto) ? "value=\"$producto->codigo\"" : "" ?>>
    
    <br>
    <div class="row">
        <div class="col-md-8">
            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Guardar">        
        </div>
        <div class="col-md-4">
            <a class="btn btn-lg btn-default btn-block" href="categorias">Cancelar</a>        
        </div>
    </div>
</form>