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
                        </tr>
                    {/foreach}
            </table>  
        </div>
    </div>
</div>
{include 'templates/footer.tpl'}