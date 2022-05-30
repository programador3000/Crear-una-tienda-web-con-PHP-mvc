<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a href="/PruebasPHP/udemy/PHP-mvc/public/index.php" class="navbar-brand">Tienda</a>

    </nav>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
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
    </div><!--8col-->
    <div class="col-sm-2"></div>
    </div><!--row-->
    </div><!--container-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>