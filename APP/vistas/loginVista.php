<?php include_once("encabezado.php"); ?>
                <h1 class="text-center">Login</h1>
                <div class="card p-4 bg-light">
    <form action="login/verifica/" method="POST">
        <div class="form-grou text-left">
            <label for="Usuario">Usuario:</label>
            <input type="text" name="usuario" class="form-control">
        </div>
        <div class="form-group text-left">
            <label for="clave">Clave acceso:</label> 
            <input type="password" name="clave" class="form-control">
        </div>
        <div class="form-group text-left">
            <input type="submit" value="Enviar" class="btn btn-success"></td>
        </div>
        
            <input type="checkbox" name="recordar">
            <label for="clave" class="">Recordar</label>
        
    </form>
    </div><!--card-->
    <a href="login/alta/" >Darse de alta en el sistema</a><br>
        <a href="login/olvido/" >¿Olvidaste tu clave de acceso?</a>
        
   <?php include_once("piepagina.php") ?>