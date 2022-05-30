<?php include_once("encabezado.php"); ?>

<h2 class="text-center">Registro</h2>
<form action="<?php print RUTA; ?>login/registro/" class="" method="POST">
    <div class="form-group text-left">
        <label for="nombre" class="">* Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Escriba su nombre"/>
    </div>

    <div class="form-group text-left">
        <label for="apellidoPaterno" class="">* Apellido Paterno:</label>
        <input type="text" class="form-control" name="apellidoPaterno" id="apellidoPaterno" required placeholder="Escriba su apellido paterno"/>
    </div>

    <div class="form-group text-left">
        <label for="apellidoMaterno" class="">Apellido Materno:</label>
        <input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno"  placeholder="Escriba su apellido materno"/>
    </div>

    <div class="form-group text-left">
        <label for="correo" class="">* Correo electrónico:</label>
        <input type="email" class="form-control" name="correo" id="correo" required placeholder="Escriba su correo electrónico"/>
    </div>

    <div class="form-group text-left">
        <label for="clave1" class="">* Clave de acceso:</label>
        <input type="password" class="form-control" name="clave1" id="clave1" required placeholder="Escriba su clave de acceso"/>
    </div>

    <div class="form-group text-left">
        <label for="clave2" class="">* Repetir clave de acceso::</label>
        <input type="password" class="form-control" name="clave2" id="clave2" required placeholder="Verifique su clave de acceso"/>
    </div>

    <div class="form-group text-left">
        <label for="direccion" class="">* Direccion:</label>
        <input type="text" class="form-control" name="direccion" id="direccion" required placeholder="Escriba su direccion"/>
    </div>

    <div class="form-group text-left">
        <label for="ciudad" class="">* Ciudad:</label>
        <input type="text" class="form-control" name="ciudad" id="ciudad" required placeholder="Escriba su ciudad"/>
    </div>

    <div class="form-group text-left">
        <label for="estado" class="">* Estado:</label>
        <input type="text" class="form-control" name="estado" id="estado" required placeholder="Escriba su estado"/>
    </div>

    <div class="form-group text-left">
        <label for="codpos" class="">* Codigo Postal:</label>
        <input type="text" class="form-control" name="codpos" id="codpos" required placeholder="Escriba su codigo postal"/>
    </div>

    <div class="form-group text-left">
        <label for="pais" class="">* Pais:</label>
        <input type="text" class="form-control" name="pais" id="pais" required placeholder="Escriba su pais"/>
    </div>

    <div class="form-group text-left">
        <label for="enviar" class=""></label>
        <input type="submit" class="btn btn-success" value="Enviar datos" role="button"  />
        <a href="<?php print RUTA; ?>login/" class="btn btn-info">Regresar</a>
    </div>
</form>

<?php include_once("piepagina.php") ?>