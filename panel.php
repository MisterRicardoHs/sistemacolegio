<?php
    session_start();
    require_once("class/admin.php");
    $obj = new admin();
    $idpadre = $_GET['id'];
    $hijos = $obj->consultarHijos($idpadre);
    
?>
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
        <div class="float-left">
                <a href="index.php" class="btn btn-primary mb-5">Cerrar Sesión</a>
            </div>
        <div class="col-xs-12 col-md-1 col-lg-1"></div>
          
        <div class="col-xs-12 col-md-10 col-lg-10">
            <form action="registrarCarril.php" method="POST">
            <?php 
                if(isset($_GET['mensaje']) && $_GET['mensaje'] == "error"){
                    echo "<span style='color:red'>Error al registrar carril</span>";
                }else if(isset($_GET['mensaje']) && $_GET['mensaje'] == "ok"){
                    echo "<span style='color:green'>Carril Registrado, Espere por favor</span>";
                }else if(isset($_GET['mensaje']) && $_GET['mensaje'] == "oke"){
                    echo "<span style='color:green'>Hijo registrado satisfactoriamente</span>";
                }else if(isset($_GET['mensaje']) && $_GET['mensaje'] == "errore"){
                    echo "<span style='color:red'>Error al registrar hijo</span>";
                }else if(isset($_GET['mensaje']) && $_GET['mensaje'] == "oki"){
                    echo "<span style='color:green'>Hijo Eliminado</span>";
                }else if(isset($_GET['mensaje']) && $_GET['mensaje'] == "errori"){
                    echo "<span style='color:red'>Error al eliminar hijo</span>";
                }else if(isset($_GET['mensaje']) && $_GET['mensaje'] == "oko"){
                    echo "<span style='color:green'>Hijos Entregados</span>";
                }else if(isset($_GET['mensaje']) && $_GET['mensaje'] == "erroro"){
                    echo "<span style='color:red'>Error al entregar hijos</span>";
                }
            ?>
           
                <div class="card mt-3">
                    <div class="card-body">
                    <h5 class="card-title text-center">Panel Administrativo</h5>
                    <nav class="mt-3"> 
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Recoger</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Registrar Alumno</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <form action="registrarCarril.php" method="POST">
                        <h5 class="text-center mt-5">Seleccione el carril </h5>
                            <div class="row mt-5">
                                <div class="col-xs-12 col-md-4 col-lg-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="carril" id="exampleRadios1" value="1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Carril 1
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 col-lg-4">
                                     <div class="form-check">
                                        <input class="form-check-input" type="radio" name="carril" id="exampleRadios1" value="2" >
                                        <label class="form-check-label" for="exampleRadios1">
                                            Carril 2
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 col-lg-4">
                                     <div class="form-check">
                                        <input class="form-check-input" type="radio" name="carril" id="exampleRadios1" value="3" >
                                        <label class="form-check-label" for="exampleRadios1">
                                            Carril 3
                                        </label>
                                    </div>
                                </div>

                                <input type="hidden" name="idpadre" value="<?php echo $_GET['id']?>">
                                <?php if(isset($_GET['mensaje']) && $_GET['mensaje'] != "ok" || !isset($_GET['mensaje'])){?>
                                <input type="submit" class="btn btn-success" value="Llegué" style="width:35%;margin-left:30%;margin-top:4%">
                                <?php } ?>
                            </div>
                        </form>
                        <form action="actualizarestado.php" method="POST">
                                <input type="hidden" name="idpadre" value="<?php echo $_GET['id']?>">
                                <?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == "ok"){?>
                                <input type="submit" class="btn btn-success" value="Listo" style="width:35%;margin-left:30%;margin-top:4%">
                                <?php } ?>
                        </form>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <form action="registrarHijo.php" method="POST">
                            <br>
                                    <div class="form-group">
                                        <label for="">Nombre Alumno: </label>
                                        <input type="text" class="form-control" name="alumno">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Identificacion: </label>
                                        <input type="text" class="form-control" name="identi">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sección:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seccion" id="exampleRadios1" value="Pre-escolar" >
                                            <label class="form-check-label" for="exampleRadios1">
                                                Pre-escolar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seccion" id="exampleRadios1" value="Primaria" >
                                            <label class="form-check-label" for="exampleRadios1">
                                                Primaria
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seccion" id="exampleRadios1" value="Bachillerato" >
                                            <label class="form-check-label" for="exampleRadios1">
                                                Bachillerato
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="idpadre" value="<?php echo $_GET['id']?>">
                                        <br>
                                        <input type="submit" class="btn btn-success" value="Guardar">
                                    </div>
                            </form>
                            <hr>
                           <h5 class="text-center">Hijos Registrados</h5>
                            <hr>
                            <br>
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Identidad</th>
                                <th scope="col">Grado</th>
                                <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($hijos as $hij){?>
                                <tr>
                                    <td><?php echo $hij['nombre']; ?></td>
                                    <td><?php echo $hij['identi']; ?></td>
                                    <td><?php echo $hij['grado']; ?></td>
                                    <td>
                                        <form action="eliminarhijo.php" method="post">
                                            <input type="hidden" name="idpadre" value="<?php echo $_GET['id']?>">
                                            <input type="hidden" value="<?php echo $hij['id_hijo']; ?>" name="idhijo">
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php }?>
                            </tbody>
                         </table>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-xs-12 col-md-1 col-lg-1">
        </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>