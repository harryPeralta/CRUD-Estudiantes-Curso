<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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
        <center>
        <h1 class="titulo"> Crear Estudiante</h1>
    </center>
       

            <div class="mt-5 mb-5 p-2 card bg-light rounded shadow">
                <div class="card-body">
                <form action="accionesEstudiante.php" method="post">

                    <div class="form-group">
                        <label for="nombre"> Nombre:</label>
                        <input class="form-control" type="text" id="nombre"  name="nombre" placeholder="Escriba aqui su nombre"> 
                    </div>
                    <div class="form-group">
                        <label for="edad"> Edad:</label>
                        <input class="form-control" type="number" id="edad"  name="edad" min="1" max="99" placeholder="Escriba aqui su edad"> 
                    </div>

                    <div class="form-group">
                        <label for="genero">Género:</label>
                        <select class="form-control" name="genero" id="genero">
                            <option value="">seleccione su Genero...</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    
    
                    </div> <br>
                  
                    <button class="btn btn-secundary btn-danger" type ="sumbit" >Crear</button>
                

                </form>
                </div>  
            </div>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 

</body>
</html>