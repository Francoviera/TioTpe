{include 'templates/header.tpl'}
<div class="container"> 
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <h2>Categoria {$categoria->tipo}</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Productos Disponibles</th>
                        <th>Precios</th>
                        <th>Cantidad</th>
                        {* <th>Edicion Adm</th> *}
                    </tr>
                </thead>
                <tbody>
                    {foreach $productos as $producto}
                        <tr>
                            <td> {$producto->nombre}</td>
                            <td> {$producto->precio}</td>
                            <td> {$producto->cantidad}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
    {* <div class="row">
        <div class="col-xs-12 col-md-6">
            <button class="btn btn-outline-primary btnAgregar" type="button">agregar Producto</button>
            <div class="agregar">
                <form action="agregar" method="post">
                    <h4>Ingrese producto</h4>
                    <input class="form-control" type="text" name="nombre">
                    <h4>precio</h4><input class="form-control" type="number" name="precio">
                    <h4>cantidad</h4><input class="form-control" type="number" name="cantidad">
                    <h4>categoria</h4><input class="form-control" type="number" name="categoria">
                    <button class="btn btn-outline-success" type="submit">agregar</button>
                </form>
            </div>

            <div class="editar d-none">
                <form action="editar" method="post">
                    <h4>Editar producto</h4>
                    <input class="form-control valueNombre" type="text" name="nombre">
                    <h4>precio</h4><input class="form-control valuePrecio" type="number" name="precio">
                    <h4>cantidad</h4><input class="form-control valueCantidad" type="number" name="cantidad">
                    <h4>categoria</h4><input class="form-control valueCategoria" type="number" name="categoria">
                    <button class="btn btn-outline-success" type="submit">Editar</button>
                </form>
            </div>
        </div>
    </div> *}
</div>
{include 'templates/footer.tpl'}