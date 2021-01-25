<?php include("db.php") ?>
<?php include("include/header.php") ?>
<div class="container p-12">
    <div class="row">
        <div class="col-md-8">
            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>
                <div class="card card-body">
                    <form action="save_task.php" method="POST">
                        <div  class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre del dueño" autofocus>
                        </div>
                        <div  class="form-group">
                            <input type="text" name="telefono" class="form-control" placeholder="Número de teléfono" autofocus>
                        </div>
                        <div  class="form-group">
                            <input type="text" name="mascota" class="form-control" placeholder="Nombre de la mascota" autofocus>
                        </div>
                        <div  class="form-group">
                            <input type="text" name="edad" class="form-control" placeholder="Edad de la mascota" autofocus>
                        </div>
                        <div  class="form-group">
                        <div  class="form-group">
                            <input type="text" name="sexo" class="form-control" placeholder="Sexo de la mascota" autofocus>
                        </div>
                            <textarea type="text" name="descripcion" class="form-control" placeholder="Descripción de la mascota" autofocus></textarea>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                    </form>
                </div>
        </div>
    </div>
</div>
<?php include("include/footer.php") ?>