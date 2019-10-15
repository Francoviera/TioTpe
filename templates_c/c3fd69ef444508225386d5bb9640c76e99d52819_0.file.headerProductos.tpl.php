<?php
/* Smarty version 3.1.33, created on 2019-09-24 20:49:01
  from 'C:\xampp\htdocs\tpEspecialGit\tpEspecial\templates\headerProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8a651d8c6727_30475579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3fd69ef444508225386d5bb9640c76e99d52819' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecialGit\\tpEspecial\\templates\\headerProductos.tpl',
      1 => 1568985827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8a651d8c6727_30475579 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">.
    <link rel="stylesheet" href="css/estilo.css">
    <?php echo '<script'; ?>
 src="js/productos.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body>
    <header>
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <nav class="navbar navbar-expand-md navbar-dark bg-danger">
                    <a class="navbar-brand" href="index.html"><h4>Dia Online</h4></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a href="http://localhost/tpEspecial/home"><button class="inicio btn btn-danger" type="button">Inicio <span class="sr-only">(current)</span></button></a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/tpEspecial/productos"><button class="producto btn btn-danger" type="button">Productos</button></a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/tpEspecial/categorias"><button class="producto btn btn-danger" type="button">Categorias</button></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>    
        </div>
    </header><?php }
}
