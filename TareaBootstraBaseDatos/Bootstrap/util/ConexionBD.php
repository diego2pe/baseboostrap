<?php
class ConexionBD{
    const servidor = "localhost:3306";
    const usuario = "root";
    const password = "";
    const basedatos = "pruebabdx";
    private $cn = null;

    public function getConexionBD()
    {  try {
        $this->cn = mysqli_connect(self::servidor, self::usuario, self::password, self::basedatos);
    } catch (Exception $th) {
        //throw $th;
    }
    return $this -> cn;

    }
}

?>