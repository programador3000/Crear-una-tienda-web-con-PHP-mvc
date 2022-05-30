<?php include_once("encabezado.php"); ?>

<h2 class="text-center">Registro</h2>
<form action="<?php print RUTA; ?>login/registro/" class="" method="POST">
    <div class="form-group text-left">
        <label for="nombre" class="">* Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Escriba su nombre" 
        value='<?php isset($datos["data"]["nombre"])? print $datos["data"]["nombre"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
        <label for="apellidoPaterno" class="">* Apellido Paterno:</label>
        <input type="text" class="form-control" name="apellidoPaterno" id="apellidoPaterno" required placeholder="Escriba su apellido paterno"        
        value='<?php isset($datos["data"]["apellidoPaterno"])? print $datos["data"]["apellidoPaterno"]:""; ?>'/>

    </div>

    <div class="form-group text-left">
        <label for="apellidoMaterno" class="">Apellido Materno:</label>
        <input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno"  placeholder="Escriba su apellido materno"        
        value='<?php isset($datos["data"]["apellidoMaterno"])? print $datos["data"]["apellidoMaterno"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
        <label for="email" class="">* Correo electrónico:</label>
        <input type="email" class="form-control" name="email" id="email" required placeholder="Escriba su email electrónico" 
        value='<?php isset($datos["data"]["email"])? print $datos["data"]["email"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
        <label for="clave1" class="">* Clave de acceso:</label>
        <input type="password" class="form-control" name="clave1" id="clave1" required placeholder="Escriba su clave de acceso" 
        value='<?php isset($datos["data"]["clave1"])? print $datos["data"]["clave1"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
        <label for="clave2" class="">* Repetir clave de acceso::</label>
        <input type="password" class="form-control" name="clave2" id="clave2" required placeholder="Verifique su clave de acceso" 
        value='<?php isset($datos["data"]["clave2"])? print $datos["data"]["clave2"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
        <label for="direccion" class="">* Direccion:</label>
        <input type="text" class="form-control" name="direccion" id="direccion" required placeholder="Escriba su direccion" 
        value='<?php isset($datos["data"]["direccion"])? print $datos["data"]["direccion"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
        <label for="ciudad" class="">* Ciudad:</label>
        <input type="text" class="form-control" name="ciudad" id="ciudad" required placeholder="Escriba su ciudad" 
        value='<?php isset($datos["data"]["ciudad"])? print $datos["data"]["ciudad"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
        <label for="estado" class="">* Estado:</label>
        <input type="text" class="form-control" name="estado" id="estado" required placeholder="Escriba su estado" 
        value='<?php isset($datos["data"]["estado"])? print $datos["data"]["estado"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
        <label for="colonia" class="">* Colonia:</label>
        <input type="text" class="form-control" name="colonia" id="colonia" placeholder="Escriba su colonia" required  
        value='<?php isset($datos["data"]["colonia"])? print $datos["data"]["colonia"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
        <label for="codpos" class="">* Codigo Postal:</label>
        <input type="text" class="form-control" name="codpos" id="codpos" required placeholder="Escriba su codigo postal" 
        value='<?php isset($datos["data"]["codpos"])? print $datos["data"]["codpos"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
        <label for="pais" class="">* Pais:</label>
        <input type="text" class="form-control" name="pais" id="pais" required placeholder="Escriba su pais" 
        value='<?php isset($datos["data"]["pais"])? print $datos["data"]["pais"]:""; ?>'/>
    </div>

    <div class="form-group text-left">
        <label for="enviar" class=""></label>
        <input type="submit" class="btn btn-success" value="Enviar datos" role="button"  />
        <a href="<?php print RUTA; ?>login/" class="btn btn-info">Regresar</a>
    </div>
</form>

<?php include_once("piepagina.php") ?>