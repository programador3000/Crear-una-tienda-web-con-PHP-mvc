<?php

/*
*Control maneja la URL y lanza los procesos
el primer elemento es el objeto o controlador 
el segundo elemento es el emetodo o accion
3l tercero y posteriores son los parametros
*
*/

class Control{
    protected $controlador= "Login";
    protected $metodo = "caratula";
    protected $parametros = [];


    function __construct(){
        $url=  $this->separarURL();
        
        if($url!="" && file_exists("../APP/controladores/".ucwords($url[0]).".php")){
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
            var_dump($url);
        }
        //Cargand la clase del controlador
        require_once("../APP/controladores/".ucwords($this->controlador).".php");
        //Instanciar la clase del controlador
        $this->controlador = new $this->controlador;
    }

    function separarURL(){
        $url="";
        if(isset($_GET["url"])){
            //wliminamos el caracter final
            $url= rtrim($_GET["url"],"/");
            $url= rtrim($_GET["url"],"\\");
            //Limpiamos caracteres no propios para la URL
            $url= filter_var($url, FILTER_SANITIZE_URL);
            //Separamos
            $url= explode("/",$url);
        }
        return $url;
    }
}
?>