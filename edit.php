<?php
    include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM formulario WHERE id = $id";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $telefono = $row['telefono'];
            $mascota = $row['mascota'];
            $edad = $row['edad'];
            $sexo = $sexo['sexo'];
            $descripcion = $row['descripcion'];
        }
    }
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $mascota = $_POST['mascota'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $descripcion = $_POST['descripcion'];
        $query = "UPDATE formulario set nombre = '$nombre', telefono = '$telefono', mascota = '$mascota', edad = '$edad', sexo = '$sexo',  descripcion = '$descripcion' WHERE id = $id";
        mysqli_query($conn,$query);
        $_SESSION['message'] = 'Se actualizó su dato.';
        $_SESSION['message_type'] = 'warning';
        header("Location: mascota.php");
    }
?>

<?php include("include/header.php"); ?>
<h1>Actualizar dato.</h1>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar nombre.">
                    </div>
                    <div class="form-group">
                        <input type="text" name="telefono" class="form-control" value="<?php echo $telefono; ?>" placeholder="Actualizar teléfono.">
                    </div>
                    <div class="form-group">
                        <input type="text" name="mascota" class="form-control" value="<?php echo $mascota; ?>" placeholder="Actualizar mascota.">                    
                    </div>
                    <div class="form-group">
                        <input type="text" name="edad" class="form-control" value="<?php echo $edad; ?>" placeholder="Actualizar edad.">                    
                    </div>
                    <div class="form-group">
                        <input type="text" name="sexo" class="form-control" value="<?php echo $sexo; ?>" placeholder="Actualizar sexo.">                    
                    </div>
                    <div class="form-group">
                        <textarea type="text" name="descripcion" rows="2" class="form-control"  placeholder="Actualizar descripción."><?php echo $descripcion; ?></textarea>
                    </div>
                    <button class="btn btn-success" name="update">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php"); ?>
