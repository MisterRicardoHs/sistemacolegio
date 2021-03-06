<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
        <div class="col-xs-12 col-md-4 col-lg-4"></div>
        <div class="col-xs-12 col-md-4 col-lg-4">
            <form action="registrar.php" method="POST">
            <?php 
            
                if(isset($_GET['mensaje']) && $_GET['mensaje'] == "error"){
                    echo "<span style='color:red'>Error de usuario</span>";
                }else if(isset($_GET['mensaje']) && $_GET['mensaje'] == "ok"){
                    echo "<span style='color:green'>Registro satisfactorio</span>";
                }else if(isset($_GET['mensaje']) && $_GET['mensaje'] == "incom"){
                    echo "<span style='color:red'>Complete campos</span>";
                }
            ?>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title text-center">Registro de Padres</h5>
                        <div class="form-group mt-3">
                            <label for="">Nombre: </label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="">Cédula: </label>
                            <input type="text" class="form-control" name="cedula">
                        </div>
                        <div class="form-group">
                            <label for="">Correo: </label>
                            <input type="text" class="form-control" name="correo">
                        </div>
                        <div class="form-group">
                            <label for="">Clave: </label>
                            <input type="password" class="form-control" name="clave">
                        </div>
                        <div class="form-group mt-3">
                           <input type="submit" class="btn btn-success" value="Registrarse">
                        </div>
                    </div>
                        <div class="card-footer">
                             <a href="http://localhost/parcial/index.php">Volver al Login</a>
                        </div>
                </div>
            </form>
            <div class="col-xs-12 col-md-4 col-lg-4">
        </div>
        </div>
    </div>
</body>
</html>