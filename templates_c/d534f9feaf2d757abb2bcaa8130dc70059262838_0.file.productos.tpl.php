<?php
/* Smarty version 3.1.33, created on 2019-09-24 20:51:24
  from 'C:\xampp\htdocs\tpEspecialGit\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8a65ac6a3a22_76994093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd534f9feaf2d757abb2bcaa8130dc70059262838' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecialGit\\templates\\productos.tpl',
      1 => 1569036751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/headerProductos.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d8a65ac6a3a22_76994093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/headerProductos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                        <th>Edicion adm</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inventario']->value, 'producto');
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
                                    <button type="button" class="btnEdit" data-id="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">Editar</button>
                                    <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button">Eliminar</button></a>
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
            <button class="btn btn-outline-primary btnAgregar" type="button">agregar Producto</button>
            <div class="agregar">
                <form action="productos/agregar" method="post">
                    <h4>Ingrese producto</h4>
                    <input class="form-control" type="text" name="nombre">
                    <h4>precio</h4><input class="form-control" type="number" name="precio">
                    <h4>cantidad</h4><input class="form-control" type="number" name="cantidad">
                    <h4>categoria</h4><input class="form-control" type="number" name="categoria">
                    <button class="btn btn-outline-success" type="submit">agregar</button>
                </form>
            </div>

            <button class="btn btn-outline-primary btnEditar" type="button">editar Producto</button>
            <div class="editar d-none">
                <form action="productos/editar/" method="post">
                    <h4>Editar producto</h4>
                    <input class="form-control" type="text" name="nombre">
                    <h4>precio</h4><input class="form-control" type="number" name="precio">
                    <h4>cantidad</h4><input class="form-control" type="number" name="cantidad">
                    <h4>categoria</h4><input class="form-control" type="number" name="categoria">
                    <button class="btn btn-outline-success" type="submit">Editar</button>
                </form>
            </div>
            
                        </table>
        </div>
    </div>  
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
