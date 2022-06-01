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
        print "Hola desde el olvido";
    }

    function registro(){
        $errores=array();
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
                    print "No se inserto el registro";
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
            $datos = [
                "titulo"=> "Registro usuario",
                "menu"=>false 
            ];
            $this->vista("loginRegistroVista",$datos);
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