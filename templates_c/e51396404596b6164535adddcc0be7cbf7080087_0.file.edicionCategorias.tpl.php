<?php
/* Smarty version 3.1.33, created on 2019-10-11 02:07:06
  from 'C:\xampp\htdocs\tpEspecial\templates\edicionCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9fc7aae2e505_85187101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e51396404596b6164535adddcc0be7cbf7080087' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\edicionCategorias.tpl',
      1 => 1570752342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9fc7aae2e505_85187101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container"> 
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <table class="table">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</td>
                            <td><a href="categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><input class="verCategoria btn btn-primary" type="button" value="Ver Categoria"></a></td>
                            <td><a href="editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><button type="button" class="btn btn-warning">Editar</button></a></td>
                            <td><a href="eliminarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>  
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <h4 class="bg bg-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
            <?php }?>
            <form action="formEditarCategoria" method="post">
                <h2>Editar Categoria</h2>
                <h4>tipo</h4><input class="form-control" type="text" name="tipo" value="<?php echo $_smarty_tpl->tpl_vars['categoriaEdit']->value->tipo;?>
">
                <div class="md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <label for="form10">Descripcion</label>
                    <textarea id="form10" class="md-textarea form-control" name="desc" rows="3"><?php echo $_smarty_tpl->tpl_vars['categoriaEdit']->value->descripcion;?>
</textarea>
                </div>
                <h4>id-categoria</h4><input class="form-control" type="number" name="id" value="<?php echo $_smarty_tpl->tpl_vars['categoriaEdit']->value->id;?>
">
                <button class="btn btn-outline-success" type="submit">Editar</button>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
