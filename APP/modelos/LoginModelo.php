<?php
/**
 * Login modelo
 */

 class LoginModelo{
     private $db;

     function __construct(){
         $this->db = new MySQLdb();
     }
    
     function insertarRegistro($data){
         $r = false;
         if ($this->validaCorreo($data["email"])) {
             $clave = hash_hmac("sha512",$data["clave1"],"mimamamemima");
             $sql = "INSERT INTO usuarios VALUES (0,";
             $sql.="'".$data["nombre"]."', ";
             $sql.="'".$data["apellidoPaterno"]."', ";
             $sql.="'".$data["apellidoMaterno"]."', ";
             $sql.="'".$data["email"]."', ";
             $sql.="'".$data["direccion"]."', ";
             $sql.="'".$data["ciudad"]."', ";
             $sql.="'".$data["colonia"]."', ";
             $sql.="'".$data["estado"]."', ";
             $sql.="'".$data["codpos"]."', ";
             $sql.="'".$data["pais"]."', ";
             $sql.="'".$clave."') ";
            $r = $this->db->queryNoSelect($sql);

         }
         return $r;
         
        }
     function validaCorreo($email){
        $sql = "SELECT * FROM usuarios WHERE email='".$email."'";
        $data= $this->db->query($sql);
        return (count($data)==0)?true:false;
    }
 
 }
?>