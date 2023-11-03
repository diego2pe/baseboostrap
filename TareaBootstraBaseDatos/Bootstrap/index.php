<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
    <script>
        function eliminar() {
            document.form.action = "../controlador/ProcesoControlador.php";
            document.form.method = "GET";
            document.form.op.value = "1";
            document.form.submit();
        }
        function grabar() {
            document.form.action= "../controlador/ProcesoControlador.php";
            document.form.method= "GET";
            document.form.op.value= "2";
            document.form.submit();
        }
    </script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container py-4">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <h2>Formulario de Lenguaje</h2>
            <form name="form">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Codigo</label>
                    <input type="number" class="form-control" name="txtcod" placeholder="Numero de lenguaje">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Lenguaje</label>
                    <input type="text" class="form-control" name="txtnomb" placeholder="Nombre del lenguaje">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Numero Programador</label>
                    <input type="number" class="form-control" name="txtcant" placeholder="Cantidad de programadores">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripcion del Lenguaje</label>
                    <textarea class="form-control" name="txtdes" rows="3"></textarea>
                </div>
                <div class="d-grid gap-2">
                    <input type="hidden" name="op">
                    <button class="btn btn-success" onclick= "grabar()">Grabar</button>
                    <button class="btn btn-secondary" onclick= "eliminar()">Eliminar</button>
                </div>    
            </form>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <h2>Listado de lenguajes</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Lenguajes</th>
                        <th>Cantidad de Programadores</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "util/ConexionBD.php";
                    $conexionBD= new ConexionBD();
                    $conexion=$conexionBD-> getConexionBD();
                    $sql=$conexion->query("select * from lenguajes");
                    while($datos = $sql->fetch_object()){ ?>
                        <tr>
                            <td><?= $datos->codeleng?></td>
                            <td><?= $datos->nombleng?></td>
                            <td><?= $datos->cantpro?></td>
                            <td><?= $datos->desleng?></td>
                        </tr>
                    <?php }
                    ?>
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
    
</body>
</html>