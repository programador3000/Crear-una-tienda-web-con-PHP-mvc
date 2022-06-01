<?php
/*
* Manejo de la base de datos MySQL
*/
class MySQLdb{
    private $host = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $db = "ecommerce";
    private $puerto = "";
    private $conn;

    function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->usuario, $this->clave, $this->db);

        if(mysqli_connect_errno()){
            printf("Error en la conexion a la base de datos %s", mysqli_connect_errno());
            exit();
        }else{
            // print "conexion exitosa"."<br>";
        }

        if (!mysqli_set_charset($this->conn, "utf8")){
            printf("Error en la conversion de caracteres %s", mysqli_connect_errno());
            exit();
        } else{
            // print "El conjunto de caracteres es: ".mysqli_character_set_name($this->conn)."<br>";
        }
    }//fin contructora
    //Query regresa un solo registro en un arreglo asociado
    function query($sql){
        $data = array();
        $r = mysqli_query($this->conn, $sql);
        if(mysqli_num_rows($r)>0){
            $data =mysqli_fetch_assoc($r);
        }
        return $data;
    }
    //Query regresa un valor booleano
    function queryNoSelect($sql){
        $data = array();
        $r = mysqli_query($this->conn, $sql);
        return $r;
    }
}