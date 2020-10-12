<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

<?php

    $codigo = $_GET['codigo'];                               //Obtener el parametro que viene en la URL
    
    include('conexionCurso.php');                           // Incluir la conexion
    $sql = " SELECT * FROM curso WHERE codigo ='$codigo'"; //Setencial SQL
    $resultado = mysqLi_query ( $conn , $sql) ;             //Ejecuta la consulta
    if( $resultado->num_rows > 0){                           //Verifica si hay resultados
        $curso = $resultado->fetch_assoc();                  //Convierte el resultado en un arreglo
    }
    $conn->close();                                         // Cerrar la conexion
?>

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


    <div class="container borde">
       
    <center> <h1 class="titulo"> Información</h1></center>
    
    <div class="card bglight rounded shadow mt-5 mb-5 p-3">
        <h2 class ="text-center">Lista de curso</h2>
            <table class="table mt-3"> 
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Horario</th>
                   
                    </tr>
                </thead>
                <tbody>
                <?php
                    echo "<tr>";
                        echo "<td>" . $curso['codigo']. "</td>";
                        echo "<td>" . $curso['nombre']. "</td>";
                        echo "<td>" . $curso['horario']. "</td>";
                    echo "<tr>";
                ?>
                </tbody>
            </table>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 

</body>
</html>