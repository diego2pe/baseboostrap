<?php
session_start();
require_once '../bean/LenguajeBean.php';
require_once '../dao/LenguajeDAO.php';

$op= $_GET['op'];
switch($op)

{   case 1:
        {   unset($_SESSION['lista']);
            unset($_SESSION['estadoeliminar']);
            $codigo = $_GET['txtcod'];
            $objLenguajeBean = new LenguajeBean();
            $objLenguajeBean -> setCODELENG($codigo);
            $obj = new LenguajeDAO();
            $i = $obj->EliminarLenguajes($objLenguajeBean);
            $_SESSION['estadoeliminar']= $i;
            $lista = $obj->Listarlenguajes();
            $_SESSION['lista']= $lista;
            header('location: ../index.php');
            break;
        }    
    
    case 2:
        {   $CODIGO = $_GET['txtcod'];
            $NOMBRE = $_GET['txtnomb'];
            $CANTIDAD = $_GET['txtcant'];
            $DESCRIPCION = $_GET['txtdes'];
            $objLenguajeBean = new LenguajeBean();
            $objLenguajeBean -> setCODELENG($CODIGO);
            $objLenguajeBean -> setNOMBLENG($NOMBRE);
            $objLenguajeBean -> setCANTPRO($CANTIDAD);
            $objLenguajeBean -> setDESLENG($DESCRIPCION);
            $objLenguajeDAO =new LenguajeDAO();
            $estado = $objLenguajeDAO->InsertarLenguaje($objLenguajeBean);
            $_SESSION['estado'] = $estado;
            header('Location: ../index.php');
        }        
        

}
?>