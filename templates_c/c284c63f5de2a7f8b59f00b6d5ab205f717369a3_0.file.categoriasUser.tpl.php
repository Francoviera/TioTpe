<?php
/* Smarty version 3.1.33, created on 2019-10-07 07:13:05
  from 'C:\xampp\htdocs\tpEspecial\templates\categoriasUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9ac961a734f7_87518501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c284c63f5de2a7f8b59f00b6d5ab205f717369a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\categoriasUser.tpl',
      1 => 1570425020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9ac961a734f7_87518501 (Smarty_Internal_Template $_smarty_tpl) {
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
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>  
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
