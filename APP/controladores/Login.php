<?php
/**
 * Controlador Login
 */
class Login extends Controlador{
    private $modelo;
    
    function __construct()
    {
        $this->modelo = $this->modelo ("LoginModelo");
    }   

    function caratula()
    {
        $datos=[
            "titulo"=>"Login",
            "menu"=>false
        ];
        $this->vista("loginVista",$datos);
    }

    function olvido(){
        $errores=array();
        $data = array();
        if ($_SERVER['REQUEST_METHOD']=="POST") {
            $email = isset($_POST["email"])?$_POST["email"]:"";
            if ($email=="") {
                array_push($errores,"El email es requerido");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {   
                array_push($errores,"El correo electronico no es valido");
            }
            if(count($errores)==0){
                if($this->modelo->validaCorreo($email)){
                    array_push($errores,"El correo electronico no existe en la base de datos");
                }else{
                    if(!$this->modelo->enviarCorreo($email)){
                        $datos = [
                            "titulo"=> "Cambio de clave de acceso",
                            "menu"=>false,
                            "errores"=>[],
                            "data"=>[],
                            "subtitulo"=>"Cambio de clave de acceso",
                            "texto"=> "Se ha enviado un correo a <b>".$email."</b> para que pueedas cambiar tu clave de acceso. Cualquier duda te puedes comunicar con nosotros. No olvides revisar tu bandeja de spam",
                            "color"=>"alert-success",
                            "url"=>"login",
                            "colorBoton"=>"btn-success",
                            "textoBoton"=>"Regresar"
                        ];
                        $this->vista("mensajeVista",$datos);
                    
                    }else{
                        $datos = [
                            "titulo"=> "Error en el envio del correo",
                            "menu"=>false,
                            "errores"=>[],
                            "data"=>[],
                            "subtitulo"=>"Error en el envio del correo",
                            "texto"=> "Existió un problema al enviar el correo electronico. Prueba por favor más tarde o comuniquese a nuestro servicio de soporte tecnico.",
                            "color"=>"alert-danger",
                            "url"=>"login",
                            "colorBoton"=>"btn-danger",
                            "textoBoton"=>"Regresar"
                        ];
                        $this->vista("mensajeVista",$datos);
                    }
                    
                }
            }
        }else{
            $datos = [
                "titulo"=> "Olvido de la contraseña",
                "menu"=>false,
                "errores"=>[],
                "data"=>[],
                "subtitulo"=>"¿Olvidaste tu contraseña",
                
            ];
            $this->vista("loginOlvidoVista",$datos);
        }
        if(count($errores)){
            $datos = [
                "titulo"=> "Olvido de clave de acceso",
                "menu"=>false,
                "errores"=>$errores,
                "subtitulo"=>"¿Olvidaste tu contraseña",
                "data"=>[]
            ];
            $this->vista("loginOlvidoVista",$datos);
        }
    
    }

    function registro(){
        $errores=array();
        $data = array();
        if ($_SERVER['REQUEST_METHOD']=="POST") {
            $nombre = isset($_POST["nombre"])?$_POST["nombre"]:"";
            $apellidoPaterno = isset($_POST["apellidoPaterno"])? $_POST["apellidoPaterno"]:"";
            $apellidoMaterno = isset($_POST["apellidoMaterno"])? $_POST["apellidoMaterno"]:"";
            $email = isset($_POST["email"])?$_POST["email"]:"";
            $clave1=isset($_POST["clave1"])?$_POST["clave1"]:"";
            $clave2 = isset($_POST["clave2"])?$_POST["clave2"]:"";
            $direccion = isset($_POST["direccion"])?$_POST["direccion"]:"";
            $ciudad=isset($_POST["ciudad"])?$_POST["ciudad"]:"";
            $colonia=isset($_POST["colonia"])?$_POST["colonia"]:"";
            $estado =isset($_POST["estado"])?$_POST["estado"]:"";
            $codpos=isset($_POST["codpos"])?$_POST["codpos"]:"";
            $pais=isset($_POST["pais"])?$_POST["pais"]:"";
            $data = [
                "nombre" => $nombre,
                "apellidoPaterno" => $apellidoPaterno,
                "apellidoMaterno"=>$apellidoMaterno,
                "email"=>$email,
                "clave1"=>$clave1,
                "clave2"=>$clave2,
                "direccion"=>$direccion,
                "ciudad"=>$ciudad,
                "colonia"=>$colonia,
                "estado"=>$estado,
                "codpos"=>$codpos,
                "pais"=>$pais
            ];
            //validacion
            if ($nombre=="") {
                array_push($errores,"El nombre es requerido");
            }
            if ($apellidoPaterno=="") {
                array_push($errores,"El apellido paterno es requerido");
            }
            if ($email=="") {
                array_push($errores,"El email es requerido");
            }
            if ($clave1== "") {
                array_push($errores,"La clave de acceso es requerida");
            }
            if ($clave2=="") {
                array_push($errores,"La clave de acceso de verificacion es requerida");
            }
            if ($direccion=="") {
                array_push($errores,"La direccion es requerida");
            }
            if ($ciudad=="") {
                array_push($errores,"La ciudad es requerida");
            }
            if ($colonia=="") {
                array_push($errores,"La colonia es requerida");
            }
            if ($estado=="") {
                array_push($errores,"El estado es requerido");
            }
            if ($codpos=="") {
                array_push($errores,"El codigo postal es requerido");
            }
            if ($pais=="") {
                array_push($errores,"El pais es requerido");
            }
            if ($clave1!=$clave2) {
                array_push($errores,"Las claves de acceso no coinciden");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {   
                array_push($errores,"El correo electronico no es valido");
            }
            if (count($errores)==0) {
                $r = $this->modelo->insertarRegistro($data);
                if($r){
                    $datos = [
                        "titulo"=> "Bienbenida a la tienda virtual",
                        "menu"=>false,
                        "errores"=>[],
                        "data"=>[],
                        "subtitulo"=>"Bienvenid@ a nuestra tienda",
                        "texto"=> "Gracias por su registro.",
                        "color"=>"alert-success",
                        "url"=>"menu",
                        "colorBoton"=>"btn-success",
                        "textoBoton"=>"Iniciar"
                    ];
                    $this->vista("mensajeVista",$datos);
                
                }else{
                    $datos = [
                        "titulo"=> "Error en el registro",
                        "menu"=>false,
                        "errores"=>[],
                        "data"=>[],
                        "subtitulo"=>"Error en el registro",
                        "texto"=> "Existió un error en el registro, posiblemente ya existe ese correo en nuestra base de datos, favor de verificarlo",
                        "color"=>"alert-danger",
                        "url"=>"login",
                        "colorBoton"=>"btn-danger",
                        "textoBoton"=>"Regresar"
                    ];
                    $this->vista("mensajeVista",$datos);
                }
            }else{
                $datos = [
                    "titulo"=> "Registro usuario",
                    "menu"=>false,
                    "errores"=>$errores,
                    "data"=>$data
                ];
                $this->vista("loginRegistroVista",$datos);
            
            }
        } else {
           
        }
    }
    
    function cambiaclave($data){
        $errores = array();
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $id = isset($_POST["id"])?$_POST["id"]:"";
            $clave1=isset($_POST["clave1"])?$_POST["clave1"]:"";
            $clave2=isset($_POST["clave2"])?$_POST["clave1"]:"";
            //validaciones
            if ($clave1=="") {
                array_push($errores, "La clave de acceso es requerida");
            }
            if ($clave2=="") {
                array_push($errores, "La clave de verificacion es requerida");
            }
            if ($clave1!=$clave2) {
                array_push($errores, "Las claves de acceso no coinciden");
            }
            if (count($errores)){
                $datos = [
                    "titulo"=> "Cambia clave de acceso",
                    "menu"=>false,
                    "errores"=>$errores,
                    "data" => $data
                ];
                $this->vista("loginCambiaClave",$datos);
            }else{
                //No hay errores
                if ($this->modelo->cambiarClaveAcceso($id,$clave1)) {
                    $datos = [
                        "titulo"=> "Modificar clave de acceso",
                        "menu"=>false,
                        "errores"=>[],
                        "data"=>[],
                        "subtitulo"=>"Modificar clave de acceso",
                        "texto"=> "La modificación de la clave de acceso fue exitosa. Bienvenido nuevamente",
                        "color"=>"alert-success",
                        "url"=>"login",
                        "colorBoton"=>"btn-success",
                        "textoBoton"=>"Regresar"
                    ];
                    $this->vista("mensajeVista",$datos);
                } else {
                    $datos = [
                        "titulo"=> "Error al modificar la clave de acceso",
                        "menu"=>false,
                        "errores"=>[],
                        "data"=>[],
                        "subtitulo"=>"Error al modificar la clave de acceso",
                        "texto"=> "Existio un error al modificar la clave de acceso.",
                        "color"=>"alert-danger",
                        "url"=>"login",
                        "colorBoton"=>"btn-danger",
                        "textoBoton"=>"Regresar"
                    ];
                    $this->vista("mensajeVista",$datos);
                }
                
            }
        }else{
            $datos = [
                "titulo"=> "Cambia clave de acceso",
                "menu"=>false,
                "data" => $data
            ];
            $this->vista("loginCambiaClave",$datos);
        }
        
    }

    // function metodoVariable(){
    //     if(func_num_args()>0){
    //         for($i=0; $i < func_num_args(); $i++){
    //             print func_get_arg($i)."<br>";
    //         }
    //     }else{
    //         print "No hay argumentos."."<br>";
    //     }
    // }

    // function metodoFijo($arg1="Uno", $arg2="Dos", $arg3="Tres"){
    //    print $arg1."<br>";
    //    print $arg2."<br>";
    //    print $arg3."<br>";
    // }

    
}
?>