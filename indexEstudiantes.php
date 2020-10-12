<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<nav class=" navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Colegio Sena</a>
        </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item"><a class="nav-link" href="indexEstudiantes.php">Inicio </a></li>
            <a class="nav-link dropdown-toggle"  href="#" data-toggle="dropdown">Estudiantes</a>
            <li class="nav-item dropdown">
    <div class="dropdown-menu bg-warning">
            <a class="dropdown-item" href="php/listaEstudiante.php">Listar Estudiantes</a>
            <a class="dropdown-item" href="php/crearEstudiante.php">Crear Estudiantes</a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <a class="nav-link dropdown-toggle"  href="#" data-toggle="dropdown">Cursos</a>
            <li class="nav-item dropdown">
    <div class="dropdown-menu bg-warning">
            <a class="dropdown-item" href="php/listaCurso.php">Listar cursos</a>
            <a class="dropdown-item" href="php/crearCurso.php">Crear cursos</a>
    </div>
            </li>
        </ul>
    </div>
    </div>
</nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>