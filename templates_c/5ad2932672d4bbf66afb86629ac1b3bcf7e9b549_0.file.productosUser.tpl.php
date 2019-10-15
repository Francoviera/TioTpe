<?php
/* Smarty version 3.1.33, created on 2019-10-11 02:57:09
  from 'C:\xampp\htdocs\tpEspecial\templates\productosUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9fd365684407_61001229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad2932672d4bbf66afb86629ac1b3bcf7e9b549' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\productosUser.tpl',
      1 => 1570755427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9fd365684407_61001229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                        <tr>
                            <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->cantidad;?>
</td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</td>
                            <td> 
                                <a href="detalleProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-primary">Ver</button></a>
                            </td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                                </tbody> 
        </table>
        </div>
    </div>  
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
