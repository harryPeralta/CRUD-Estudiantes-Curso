<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/all.min.css">


</head>
<body>
<nav class=" navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Colegio Sena</a>
        </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item"><a class="nav-link" href="../indexEstudiantes.php">Inicio </a></li>
            <a class="nav-link dropdown-toggle"  href="#" data-toggle="dropdown">Estudiantes</a>
            <li class="nav-item dropdown">
    <div class="dropdown-menu bg-warning">
            <a class="dropdown-item" href="listaEstudiante.php">Listar Estudiantes</a>
            <a class="dropdown-item" href="crearEstudiante.php">Crear Estudiantes</a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <a class="nav-link dropdown-toggle"  href="#" data-toggle="dropdown">Cursos</a>
            <li class="nav-item dropdown">
    <div class="dropdown-menu bg-warning">
    <a class="dropdown-item" href="listaCurso.php">Listar cursos</a>
            <a class="dropdown-item" href="crearCurso.php">Crear cursos</a>
    </div>
            </li>
        </ul>
    </div>
    </div>
</nav>


<div class="card bglight rounded shadow mt-5 mb-5 p-3">
        <h2 class ="text-center">Lista de Estudiantes</h2>
            <table class="table mt-3"> 
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php

                    include('conexionEstudiante.php');
                    $sql = "SELECT * FROM estudiante";
                    $estudiantes = $conn->query($sql);
                    if($estudiantes)
                    {
                        foreach($estudiantes as $estudiante)
                        {
                            echo "<tr>";
                                echo "<td>" . $estudiante['id']. "</td>";
                                echo "<td>" . $estudiante['nombre']. "</td>";
                                echo "<td>";
                                    echo " <a href = 'read.php?id=" .$estudiante['id'] ."'class ='btn btn-info rounded-circle'><i class='far fa-eye'></i> </a> ";                               
                                    echo " <a href = 'update.php?id=" .$estudiante['id'] ."'class ='btn btn-info rounded-circle'><i class='fas fa-pen'></i> </a> ";                               
                                    echo "<a href = 'delete.php?id=" .$estudiante['id'] ."'class ='btn btn-danger rounded-circle'> <i class='far fa-trash-alt'></i></a>" ;                                
                               echo "<td>";
                        }
                    }
                    mysqli_close($conn);
                ?>
                </tbody>
            </table>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>