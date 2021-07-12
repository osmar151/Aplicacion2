<?php
/* Smarty version 3.1.39, created on 2021-07-08 01:59:01
  from 'C:\xampp2\htdocs\InventarioISFA\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e63fc54ccb06_04148810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f4393aeca325d24ddf1a845b93752113c65f151' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\InventarioISFA\\templates\\Home.tpl',
      1 => 1625537386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/header.tpl' => 1,
    'file:templates/Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_60e63fc54ccb06_04148810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <div class="container">
        <div class="row">
            <div class="input-field col s12">

                <h1 class="center-align blue-text">REGISTRO</h1>
            </div>
        </div>
        <form method="post" action="?class=user&method=login">
            <div class="row">
                <div class="input-field col s4">
                    <input name="nombre" id="first_name2" type="text" class="validate">
                    <label class="active" for="first_name2">Nombre</label>
                </div>
                <div class="input-field col s4">
                    <input name="pass" id="first_name3" type="password" class="validate">
                    <label class="active" for="first_name3">Password</label>
                </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input class="waves-effect waves-light btn" type="submit" value="Enviar"/>
                    </div>
                </div>
            </div>
        </form>

    </div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
