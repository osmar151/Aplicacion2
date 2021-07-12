<?php
/* Smarty version 3.1.39, created on 2021-07-08 05:25:49
  from 'C:\xampp2\htdocs\InventarioISFA\templates\Navs\BarraLateral.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e6703d453896_82305092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c4c3034b0ba3452e9c3e669a684cae10e667fb2' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\InventarioISFA\\templates\\Navs\\BarraLateral.tpl',
      1 => 1625714465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e6703d453896_82305092 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s3">
    <nav class = "center-align">Elija una opción a continuación</nav>
    <div class="collection">
        <!--<a href="?class=DireccionesVistas&method=VistaIngresarInvent" class="collection-item">Ingresar Inventario</a>-->
        <a href="?class=Inventario&method=IngresoInventario" class="collection-item">Ingresar Inventario</a>
        <a href="?class=DireccionesVistas&method=VistaVerInvent" class="collection-item">Ver Inventario</a>
        <a href="#!" class="collection-item">Buscar Producto</a>
        <a href="#!" class="collection-item">Modificar Producto</a>
        <a href="#!" class="collection-item">Eliminar Producto</a>
        <a href="#!" class="collection-item">Crear Usuario</a>
        <a href="#!" class="collection-item">Eliminar Usuario</a>
    </div>
    
</div><?php }
}
