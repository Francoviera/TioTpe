<?php
/* Smarty version 3.1.33, created on 2019-10-11 02:48:33
  from 'C:\xampp\htdocs\tpEspecial\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9fd161e46b35_45756447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9b0b1eb92c48a94955a4df2496043a1beb01797' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\login.tpl',
      1 => 1570749726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9fd161e46b35_45756447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container margen contenedor">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <form action="logIn" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introdusca el Email">
                    <small id="emailHelp" class="form-text text-muted">Nosotros nunca vamos a compartir el email a otra persona.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Introdusca su Contraseña">
                </div>
                <a href="registrarse"><button type="button" class="btn btn-secondary btnSingup">registrate</button></a>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
