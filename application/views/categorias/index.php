<div class="form-box">
    <h2>{title}</h2>
    
    <a class="btn btn-primary" href="categorias/registrar"><span class="glyphicon glyphicon-plus"></span> Nueva categor&iacute;a</a>
    <br><br>
    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th></th>
        </tr>
        {categorias}
        <tr>
            <td>{nombre}</td>
            <td class="cell-actions">
                <div class="btn-group">
                    <a class="btn btn-xs btn-warning" href="categorias/editar/{id_categoria}"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btn btn-xs btn-danger" href="categorias/eliminar/{id_categoria}"><span class="glyphicon glyphicon-trash"></span></a>
                </div>
            </td>
        </tr>
        {/categorias}
    </table>
</div>
