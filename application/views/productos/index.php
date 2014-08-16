<div class="form-box">
    <h2><?=$title?></h2>
    
    <a class="btn btn-primary" href="productos/registrar"><span class="glyphicon glyphicon-plus"></span> Nuevo producto</a>
    <br><br>
    <table class="table table-bordered">
        <tr>
            
            
            <th>Nombre</th>
            <th>Marca</th>
            <th>Fecha de registro</th>
            <th>Unidad</th>
            <th>Categoria</th>
            <th>Tipo de producto</th>
            <th>Codigo</th>
            
            <th></th>
        </tr>
        <?php foreach ($productos as $producto) { ?>
        <tr>
            
            <td><?= $producto->nombre ?></td>
            <td><?= $producto->marca ?></td>
            <td><?= $producto->fecreg ?></td>
            <td><?= $producto->id_unidad ?></td>
            <td><?= $producto->id_categoria ?></td>
            <td><?= $producto->tipo_producto ?></td>
            <td><?= $producto->codigo ?></td>
            <td class="cell-actions">
                <div class="btn-group">
                    <a class="btn btn-xs btn-warning" href="productos/editar/<?= $producto->id_producto ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btn btn-xs btn-danger" href="productos/eliminar/<?= $producto->id_producto ?>"><span class="glyphicon glyphicon-trash"></span></a>
                </div>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
