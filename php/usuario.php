<?php
session_start();
include("c.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Panel</title>
    
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    
</head>
<body>

<?php
include("sesion.php");
?>

<div class="fondo_user">

<h1 class="bienvenido"> Bienvenido <?php echo $_SESSION['cliente']; ?></h1>

</div>

<div class="perfil">
    <h1 class="display-4 text-center my-5">Informacion del perfil</h1>

        <div>

            <table class="table table-light table-hover mx-auto text-center">
                <?php
                    $cliente = $_SESSION['cliente'];
                    $data = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$cliente'");

                        while ($consulta = mysqli_fetch_array($data)) {
                 ?>
                    <tr>
                        <th>Usuario:</th>
                        <td><?php echo $consulta['usuario']; ?></td>
                    </tr>
                    <tr>
                        <th>Correo:</th>
                        <td><?php echo $consulta['correo']; ?></td>
                    </tr>
                    <tr>
                        <th>Telefono:</th>
                        <td><?php echo $consulta['telefono']; ?></td>
                    </tr>

                    <?php
                        }
                         ?>
            </table>
        </div>
<!-- botones de modificar datos y eliminar una cuenta cuando un cliente 
 inicia sesion se encuentra en la parte del perfil del cliente -->
        <div class="cont_boton">
        <input type="button" class="btn btn-success botton" name="Mod" value="Modificar datos" data-bs-toggle="modal" data-bs-target="#mod_per">
        <input type="button" class="btn btn-danger botton" name="El" value="Eliminar cuenta" data-bs-toggle="modal" data-bs-target="#el_per">
        </div>
</div>


<div class="modal fade" id="mod_per" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <div class="modal-dialog"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Configurar Perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            </div>
            <div class="modal-body">
                <form>
                    <?php
                        $cliente = $_SESSION['cliente'];
                        $data = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$cliente'");

                            while ($consulta = mysqli_fetch_array($data)) {
                      ?>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Usuario: </label>
                        <input type="text" class="form-control" value="<?php echo $consulta['usuario']; ?>" disabled>  <!-- (disabled) usado para que no se pueda modificar el nombre de usuario -->
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Correo:</label> 
                        <input type="text" class="form-control" value="<?php echo $consulta['correo']; ?>">
                    </div>
                        <div class="mb-3">
                        <label for="message-text" class="col-form-label">Telefono:</label> 
                        <input type="text" class="form-control" value="<?php echo $consulta['telefono']; ?>">
                    </div>
                        <div class="mb-3">
                        <label for="message-text" class="col-form-label">Contraseña Actual:</label> 
                        <input type="password" class="form-control">
                    </div>
                        <div class="mb-3">
                        <label for="message-text" class="col-form-label">Nueva Contraseña:</label> 
                        <input type="password" class="form-control" id="nueva_" disabled="true" required="false">
                    </div>

<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="check">
    <label class="form-check-label" for="flexCheckDefault">Cambiar Contraseña</label>
</div>
                </form>
<?php
    }
?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> 
                <button type="button" class="btn btn-primary">Cambiar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="el_per" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <div class="modal-dialog"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar cuenta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Contraseña de seguridad</label>
                        <input type="password" class="form-control" id="block_uno" disabled="">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Escriba nuevamente su contraseña</label> 
                        <input class="form-control" type="password" id="block_dos" disabled=""></input>
                    </div>
                        <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="check_eli">
    <label class="form-check-label" for="flexCheckDefault">Estoy seguro de eliminar mi cuenta</label> 
</div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> 
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>⚠️<u>ADVERTENCIA:</u></strong> Al borrar la cuenta, se perdera toda la informacion de la base de datos.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>

    </div>
</div>

<script 
    src="https://code.jquery.com/jquery-3.7.1.min.js" 
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
    crossorigin="anonymous">
</script>
   
<script type="text/javascript" src="../JS/funciones.js"></script>
<script type="text/javascript" src="../JS/bootstrap.bundle.min.js"></script>
</body>
</html>