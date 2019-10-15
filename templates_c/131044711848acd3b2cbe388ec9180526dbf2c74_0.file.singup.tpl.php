<?php
/* Smarty version 3.1.33, created on 2019-10-09 07:00:49
  from 'C:\xampp\htdocs\tpEspecial\templates\singup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9d698137ec42_35568216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '131044711848acd3b2cbe388ec9180526dbf2c74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\singup.tpl',
      1 => 1570597247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/headerJS.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9d698137ec42_35568216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/headerJS.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container margen contenedor">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <form action="singup" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="newEmail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introdusca el Email">
                    <small id="emailHelp" class="form-text text-muted">Nosotros nunca vamos a compartir el email a otra persona.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="newPassword" id="exampleInputPassword1" placeholder="Introdusca su Contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Registrarme</button>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
