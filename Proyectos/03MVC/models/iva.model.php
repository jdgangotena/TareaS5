<?php
// Modelo de UnidadDeMedida
require_once('../config/config.php');

class Iva
{
    public function todos() // select * from unidad_medida
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "SELECT * FROM `iva`";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }

}
