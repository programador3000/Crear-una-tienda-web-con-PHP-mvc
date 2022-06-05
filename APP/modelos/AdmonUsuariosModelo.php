<?php
/**
 * Modelo Usuarios Admon.
 */
class AdmonUsuariosModelo{
    private $db;
    function __construct()
    {
        $this->db=new MySQLdb();
    }
}
?>