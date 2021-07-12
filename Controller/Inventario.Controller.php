<?php
    Class Inventario
    {
        public function VerInventario()
        {
            echo "En ver inventario";
        }

        public function IngresoInventario()
        {
            $invet=new Invent();
            $smarty=new Smarty();

            $nombre=$_POST['nombre'];
            $desc=$_POST['descripcion'];
            $cantidad=$_POST['cantidad'];
            $precio=$_POST['precio'];
            $fecha=$_POST['fecha'];

            $in=$invet->GuardarInventario($nombre,$desc,$cantidad,$precio,$fecha);
            $smarty->assign('nombre','Inventario');
            $smarty->display('Inventario.tpl');

        }
    }
?>