<?php
session_start();
include("c.php");
include("sesion.php");

// Hacemos la consulta solo una vez y guardamos los datos en $consulta
$cliente = $_SESSION['cliente'];
$data = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$cliente'");
$consulta = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>

<div class="fondo_user">
    <h1 class="bienvenido"> Bienvenido <?php echo $_SESSION['cliente']; ?></h1>
</div>

<div class="perfil">
    <h1 class="display-4 text-center my-5">Información del perfil</h1>

    <div>
        <table class="table table-light table-hover mx-auto text-center">
            <tr>
                <th>Usuario:</th>
                <td><?php echo $consulta['usuario']; ?></td>
            </tr>
            <tr>
                <th>Correo:</th>
                <td><?php echo $consulta['correo']; ?></td>
            </tr>
            <tr>
                <th>Teléfono:</th>
                <td><?php echo $consulta['telefono']; ?></td>
            </tr>
        </table>
    </div>

    <div class="cont_boton">
        <input type="button" class="btn btn-success botton" value="Modificar datos" data-bs-toggle="modal" data-bs-target="#mod_per">
        <input type="button" class="btn btn-danger botton" value="Eliminar cuenta" data-bs-toggle="modal" data-bs-target="#el_per">
    </div>
</div>

<!-- Modal Modificar -->
<div class="modal fade" id="mod_per" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <div class="modal-dialog"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Configurar Perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            </div>
            <div class="modal-body">
                <form method="POST" action="actualizar_usuario.php"> <!-- Aquí se debe procesar el formulario -->
                    <div class="mb-3">
                        <label class="col-form-label">Usuario:</label>
                        <input type="text" class="form-control" name="usuario" value="<?php echo $consulta['usuario']; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Correo:</label> 
                        <input type="email" class="form-control" name="correo" value="<?php echo $consulta['correo']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Teléfono:</label> 
                        <input type="text" class="form-control" name="telefono" value="<?php echo $consulta['telefono']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Contraseña actual:</label> 
                        <input type="password" class="form-control" name="clave_actual">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Nueva contraseña:</label> 
                        <input type="password" class="form-control" id="nueva_" name="nueva_clave" disabled>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check" onclick="document.getElementById('nueva_').disabled = !this.checked;">
                        <label class="form-check-label">Cambiar contraseña</label>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> 
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Eliminar -->
<div class="modal fade" id="el_per" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <div class="modal-dialog"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar cuenta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            </div>
            <div class="modal-body">
                <form method="POST" action="eliminar_usuario.php">
                    <div class="mb-3">
                        <label class="col-form-label">Contraseña de seguridad:</label>
                        <input type="password" class="form-control" id="block_uno" name="clave" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Repita su contraseña:</label> 
                        <input class="form-control" type="password" id="block_dos" name="clave_rep" disabled>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check_eli" onclick="document.getElementById('block_uno').disabled = !this.checked; document.getElementById('block_dos').disabled = !this.checked;">
                        <label class="form-check-label">Estoy seguro de eliminar mi cuenta</label> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> 
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
                <div class="alert alert-warning mt-3">
                    <strong>⚠ ADVERTENCIA:</strong> Al borrar la cuenta, se perderá toda la información de la base de datos.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="../JS/bootstrap.bundle.min.js"></script>
<script src="../JS/funciones.js"></script>

</body>
</html>