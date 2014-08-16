<div class="form-box">
    <h2><?=$title?></h2>
    
    <a class="btn btn-primary" href="unidades/registrar"><span class="glyphicon glyphicon-plus"></span> Nueva unidad</a>
    <br><br>
    <table class="table table-bordered">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th></th>
        </tr>
        <?php foreach ($unidades as $unidad) { ?>
        <tr>
            <td><?= $unidad->id_unidad ?></td>
            <td><?= $unidad->nombre ?></td>
            <td class="cell-actions">
                <div class="btn-group">
                    <a class="btn btn-xs btn-warning" href="unidades/editar/<?= $unidad->id_unidad ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btn btn-xs btn-danger" href="unidades/eliminar/<?= $unidad->id_unidad ?>"><span class="glyphicon glyphicon-trash"></span></a>
                </div>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
