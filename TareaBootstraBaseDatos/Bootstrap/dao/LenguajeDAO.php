<?php
require_once '../util/ConexionBD.php';
require_once '../bean/LenguajeBean.php';

class LenguajeDAO {
    public function Listarlenguajes()
    { try {
        $sql = "select * from lenguajes;";
        $objc = new ConexionBD();
        $cn = $objc->getConexionBD();
        $rs = mysqli_query($cn, $sql);
        $lista = array();
        while($fila = mysqli_fetch_assoc($rs)){
            $lista[] = $fila;
        }
        mysqli_close($cn);
    } catch (Exception $th) {
    }
    return $lista;
    }
    public function EliminarLenguajes(LenguajeBean $objLenguajeBean)
    {
     try {
        $codigo = $objLenguajeBean->getCODELENG();
        $sql = "DELETE FROM lenguajes WHERE codeleng='$codigo'";
        $objc= new ConexionBD();
        $cn = $objc->getConexionBD();
        $i = mysqli_query($cn, $sql);
        mysqli_close($cn);
        return $i;
    } catch (Exception $th) {
        return 0;
    }
    }
    public function InsertarLenguaje(LenguajeBean $objPB)
    {
      $i = 0;
      try {
         $sql = "INSERT INTO Lenguajes (codeleng, nombleng, cantpro, desleng)
                VALUES ('$objPB->CODELENG','$objPB->NOMBLENG','$objPB->CANTPRO', '$objPB->DESLENG');";
         $objc = new ConexionBD();
         $cn=$objc->getConexionBD();
         $i = mysqli_query($cn, $sql);
         mysqli_close($cn);
      } catch(Exception $th){      
    }
    }
}
?>