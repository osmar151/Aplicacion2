<?php
/* Smarty version 3.1.39, created on 2021-07-05 19:54:00
  from 'C:\xampp2\htdocs\InventarioISFA\templates\Cabeceras\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e34738dbeab8_29518133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20829c3919e1316d89ac5e520cda9a1eff0136fd' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\InventarioISFA\\templates\\Cabeceras\\header.tpl',
      1 => 1625104543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e34738dbeab8_29518133 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/materialize/css/materialize.min.css"  media="screen,projection"/>
   
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>
        <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
          <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

        <?php } else { ?>
          Home
        <?php }?>
      </title>
      </head>

    <body>
<?php }
}
