<?php
/* Smarty version 3.1.33, created on 2019-10-11 02:05:46
  from 'C:\xampp\htdocs\tpEspecial\templates\edicionProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9fc75a017987_04434366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '529a6723fea74d0370a602551f3c622fc90f477b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\edicionProductos.tpl',
      1 => 1570752335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9fc75a017987_04434366 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <a href="editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btnEdit btn btn-warning">Editar</button></a>
                                <a href="eliminarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-danger">Eliminar</button></a>
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
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <h4 class="bg bg-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
            <?php }?>
            <form action="formEditarProducto" method="post">
                <h4>Editar producto</h4>
                <input class="form-control" type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['productoEdit']->value->nombre;?>
">
                <h4>precio</h4><input class="form-control" type="number" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['productoEdit']->value->precio;?>
">
                <h4>cantidad</h4><input class="form-control" type="number" name="cantidad" value="<?php echo $_smarty_tpl->tpl_vars['productoEdit']->value->cantidad;?>
">
                <h4>categoria</h4>
                    <select class="form-control" type="number" name="categoria">
                        <option selected value="<?php echo $_smarty_tpl->tpl_vars['productoEdit']->value->id_categorias_fk;?>
"><?php echo $_smarty_tpl->tpl_vars['productoEdit']->value->categoria;?>
<option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo;?>
</option> 
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <h4>id-Producto</h4><input class="form-control" type="number" name="id" value="<?php echo $_smarty_tpl->tpl_vars['productoEdit']->value->id;?>
">
                <button class="btn btn-outline-success" type="submit">Editar</button>
            </form>
        </div>  
    </div>  
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
