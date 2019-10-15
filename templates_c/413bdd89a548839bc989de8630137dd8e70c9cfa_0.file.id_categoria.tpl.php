<?php
/* Smarty version 3.1.33, created on 2019-10-01 22:02:17
  from 'C:\xampp\htdocs\tpEspecial\templates\id_categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d93b0c9ccef68_77638997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '413bdd89a548839bc989de8630137dd8e70c9cfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\id_categoria.tpl',
      1 => 1569959991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d93b0c9ccef68_77638997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container"> 
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <h2>Categoria <?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo;?>
</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Productos Disponibles</th>
                        <th>Precios</th>
                        <th>Cantidad</th>
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
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
