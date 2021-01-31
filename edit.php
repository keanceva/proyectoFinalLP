<?php
    include("db.php");
    $_SESSION['message'] =   "";
    $_SESSION['message_type'] = ''; 

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM formulario WHERE id = $id";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $telefono = $row['telefono'];
            $mascota = $row['mascota'];
            $sexo = $row['sexo'];
            $descripcion = $row['descripcion'];
            $img = $row['imagen'];
            
        }
    }
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $mascota = $_POST['mascota'];
        $sexo = $_POST['sexo'];
        $descripcion = $_POST['descripcion'];

        $image = $_FILES['image']['name'];
        $target = "images/".basename($image);
        if($target=="images/"){
            $target=$img;
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }

        $query = "UPDATE formulario set nombre = '$nombre', telefono = '$telefono', mascota = '$mascota', sexo = '$sexo',  descripcion = '$descripcion',  imagen = '$target' WHERE id = $id";
        mysqli_query($conn,$query);
        $_SESSION['message'] = 'Se actualizó su dato.';
        $_SESSION['message_type'] = 'warning';
        header("Location: mascota.php");
    }
?>

<?php include("include/header.php"); ?>

    <div class="row">
        <div class="col-md-4 mx-auto" style="padding-bottom: 200px;padding-top: 100px">
            <h2>Actualizar datos</h2>
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar nombre.">
                    </div>
                    <div class="form-group">
                        <label for="">Telefono</label>
                        <input type="text" name="telefono" class="form-control" value="<?php echo $telefono; ?>" placeholder="Actualizar teléfono.">
                    </div>
                    <div class="form-group">
                        <label for="">Mascota</label>
                        <input type="text" name="mascota" class="form-control" value="<?php echo $mascota; ?>" placeholder="Actualizar mascota.">                    
                    </div>
                    <div class="form-group">
                        <label for="">Sexo</label>
                        <input type="text" name="sexo" class="form-control" value="<?php echo $sexo; ?>" placeholder="Actualizar sexo.">                    
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea type="text" name="descripcion" rows="2" class="form-control"  placeholder="Actualizar descripción."><?php echo $descripcion; ?></textarea>
                    </div>
                    <div style="border-radius: 50%">
                        <img src="<?php echo $img; ?>" style="width: 100px" >
                    </div>
                   
                    <div class="form-group">

                       
                        <input type="hidden" name="size" value="1000000">
                        <div>
                          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg"> 
                        </div>
                    </div>

                    <button class=" btn btn-success btn-block" name="update">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php"); ?>
