{include 'templates/header.tpl'}
<div class="container"> 
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <table class="table">
                    {foreach $categorias as $categoria}
                        <tr>
                            <td>{$categoria->tipo}</td>
                            <td>{$categoria->descripcion}</td>
                            <td><a href="categoria/{$categoria->id}"><input class="verCategoria btn btn-primary" type="button" value="Ver Categoria"></a></td>
                            <td><a href="editarCategoria/{$categoria->id}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                            <td><a href="eliminarCategoria/{$categoria->id}"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                        </tr>
                    {/foreach}
            </table>  
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            {if $error}
                <h4 class="bg bg-danger">{$error}</h4>
            {/if}
            <form action="agregarCategoria" method="post">
                <h2>Ingrese Categoria</h2>
                <h4>tipo</h4><input class="form-control" type="text" name="tipo">
                <h4>desc</h4><input class="form-control" type="text" name="desc">
                <button class="btn btn-outline-success" type="submit">agregar</button>
            </form>
        </div>
    </div>
</div>
{include 'templates/footer.tpl'}