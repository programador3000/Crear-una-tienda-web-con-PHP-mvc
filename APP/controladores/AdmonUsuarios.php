<?php
/**
 * Controlador usuarios admon
 */
class AdmonUsuarios extends Controlador{
    private $modelo;
    function __construct()
    {
        $this->modelo=$this->modelo("AdmonUsuariosModelo");
    }

    public function caratula()
    {
        $datos = [
            "titulo" => "Administrativo Usuarios",
            "menu" => false,
            "admon" => true,
            "data" => []
        ];
        $this->vista("admonUsuariosCaratulaVista", $datos);
    }

    public function alta()
    {
        $datos = [
            "titulo" => "Administrativo Usuarios Alta",
            "menu" => false,
            "admon" => true,
            "data" => []
        ];
        $this->vista("admonUsuariosVista", $datos);
    }


    public function baja()
    {
        print "Usuarios admon baja";
    }


    public function cambio()
    {
        print "Usuarios admon cambio";
    }
}
?>