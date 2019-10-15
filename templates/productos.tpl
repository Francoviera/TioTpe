{include 'templates/header.tpl'}
<div class="container-fluid margen contenedor">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div>
                <img class="ofertaHotweek" src="img/ofertaHotweek.png" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-9">
            <table class="table">
                <thead>
                    <tr>
                        <th>Productos Disponibles</th>
                        <th>Precios</th>
                        <th>Cantidad</th>
                        <th>Categoria</th>
                        <th>Edicion adm</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $inventario as $producto}
                        <tr>
                            <td> {$producto->nombre}</td>
                            <td> {$producto->precio}</td>
                            <td> {$producto->cantidad}</td>
                            <td> {$producto->categoria}</td>
                            <td> 
                                <a href="editarProducto/{$producto->id}"><button type="button" class="btnEdit btn btn-warning">Editar</button></a>
                                <a href="eliminarProducto/{$producto->id}"><button type="button" class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
        <div class="col-md-3 ocultar">
            <section class="publicidadFernet">
                <h3 class="bg-warning">No te Pierdas esta super ¡¡Oferta!!</h3>
                <img src="img/publicidadOferta.jpg" alt="Publicidad Oferta">
                <h3 class="bg-warning">A tan solo $350 </h3>
            </section>
        </div> 
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            {if $error}
                <h4 class="bg bg-danger">{$error}</h4>
            {/if}
            <h4>Ingrese producto</h4>
            <form action="agregarProducto" method="post">
                <input class="form-control" type="text" name="nombre">
                <h4>precio</h4><input class="form-control" type="number" name="precio">
                <h4>cantidad</h4><input class="form-control" type="number" name="cantidad">
                <h4>categoria</h4>
                    <select class="form-control valueCategoria" type="number" name="categoria">
                        {foreach $categorias as $categoria}
                            <option value="{$categoria->id}">{$categoria->tipo}</option> 
                        {/foreach}
                    </select>
                <button class="btn btn-outline-success" type="submit">agregar</button>
            </form>
        </div>
    </div>  
</div>
{include 'templates/footer.tpl'}

{* <div>
            <h3>Total Final</h3> 
            <div class="input-group-text total"
                        {$valor= 0}
                    {foreach $productos as $producto}
                        {$valor += $producto->total}
                    {/foreach}
                    <h2>valor</h2>
            </div>
        </div>
        <div class="respuesta"></div>
    </div>
    <div class="col-md-6 col-xs-12">
        <table>
            <thead>
                <tr>
                    <th><i class="tamañoLogo fas fa-cart-arrow-down"></i></th>
                </tr>
                <tr>
                    <th>Cantidad</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>total</th>
                </tr>
            </thead>
            <tbody class="tablaDeProductos table">
                    foreach $productos as $producto
                        <tr>
                            <td> producto->cantidad</td>
                            <td> producto->nombre</td>
                            <td> producto->precio_fk</td>
                            <td> producto->total</td>
                        </tr> 
                        /foreach 
                        esto trae todos los productos de compras que ingreso el usuario, una idea para hacer mas adelante 
            </tbdy> 
        </table>*}