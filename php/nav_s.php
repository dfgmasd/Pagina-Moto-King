    

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-1g navbar-dark bg-dark ">

    <div class="container">
        <a class="navbar-brand h1" href="../index.html">MotoKing</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="
        navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="informacion.php">Informacion</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded=" false">
                        ¡Hola <?php echo $_SESSION['cliente']; ?>!
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                        <li><a class="dropdown-item" href="usuario.php">Perfil</a></li>
                        <li><a class="dropdown-item" href="cerrar_sesion.php">Cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
</a>   

<script type="text/javascript" src="../JS/bootstrap.bundle.min.js"></script>

</body>
</html>