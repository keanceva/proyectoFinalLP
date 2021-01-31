<?php include("db.php") ?>
<?php include("include/header.php") ?>
<div class="col-md-12" style="padding-bottom: 200px;padding-top: 100px">
<?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } unset($_SESSION['message']) ?>
    <table class="table table-bordered" style= "background: honeydew;">
        <thead style="background-color: #343a40!important;color: white;text-align: center">
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Mascota</th>
                <th>sexo</th>
                <th>Descripción</th>
                <th>Creado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM formulario";
                $result_formulario = mysqli_query($conn,$query); 
                while($row = mysqli_fetch_array($result_formulario)){ ?>
                <tr>
                    <td style="text-align: center">
                        <?php 
                            if ($row['imagen']!=null) {
   
                            ?>
                        <img src="<?php echo $row['imagen'] ; ?>" style="width: 60px;height: 60px" >
                        <?php 
                      
                        }
                        ?>
                    </td>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['telefono'] ?></td>
                    <td><?php echo $row['mascota'] ?></td>
                    <td><?php echo $row['sexo'] ?></td>
                    <td><?php echo $row['descripcion'] ?></td>
                    <td><?php echo $row['fecha'] ?></td>
                    <td>

                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                        </a>
                        <a href="delete_task.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<div class="card-columns">
<?php
                $query = "SELECT * FROM formulario";
                $result_formulario = mysqli_query($conn,$query); 
                while($row = mysqli_fetch_array($result_formulario)){ ?>
                    
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $row['imagen'] ; ?>" alt="Card image cap" >
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nombre'] ?></h5>
                            <p class="card-text" id="texto" ><?php echo $row['descripcion'] ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo $row['fecha'] ?></small>
                    </div>
                    </div>
            <?php } ?>
</div>

<?php include("include/footer.php") ?>