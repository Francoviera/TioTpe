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
                        <th>Detalle</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $productos as $producto}
                        <tr>
                            <td> {$producto->nombre}</td>
                            <td> {$producto->precio}</td>
                            <td> {$producto->cantidad}</td>
                            <td> {$producto->categoria}</td>
                            <td> 
                                <a href="detalleProducto/{$producto->id}"><button type="button" class="btn btn-primary">Ver</button></a>
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
            <div>
            <h3>Total Final</h3> 
            {* <div class="input-group-text total"
                {$valor= 0}
                {foreach $productos as $producto}
                    {$valor += $producto->precio*$producto->cantidad}
                {/foreach}
                <h2>{$valor}</h2> 
            </div> *}
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
                    {* foreach $productos as $producto
                        <tr>
                            <td> producto->cantidad</td>
                            <td> producto->nombre</td>
                            <td> producto->precio_fk</td>
                            <td> producto->total</td>
                        </tr> 
                        /foreach  *}
            </tbody> 
        </table>
        </div>
    </div>  
</div>
{include 'templates/footer.tpl'}