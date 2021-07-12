<?php
    Class Home
    {
        public function Inicio()
        {
            $smarty = new Smarty();
           
            $smarty->assign('nombre', 'Home');
            $smarty->display('Home.tpl');

        }
    }
?>