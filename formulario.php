<?php include("db.php") ?>
<?php include("include/header.php") ?>
<div class="container">
    <div class="row">
       
        <div class="col-md-8 mx-auto" style="padding-bottom: 200px;padding-top: 100px">
         
            <?php if(isset($_SESSION['message'])){
                if ($_SESSION['message']!='Usuario incorrecto') {
                ?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php }} unset($_SESSION['message']) ?>
            <h2>Registrar mascota </h2>
                <div class="card card-body">
                    
                    <form action="save_task.php" method="POST" enctype="multipart/form-data">
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
                        <div  class="form-group">
                            <input type="text" name="sexo" class="form-control" placeholder="Sexo de la mascota" autofocus>
                        </div>
                            <textarea type="text" name="descripcion" class="form-control" placeholder="Descripción de la mascota" autofocus></textarea>
                        </div>
<div class="form-group">

    <input type="hidden" name="size" value="1000000">
    <div>
      <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg"> 
    </div>
</div>


                        <input type="submit" class="btn btn-success btn-block" name="save_task" value="Enviar">
                    </form>
                </div>
        </div>
    </div>
</div>
<?php include("include/footer.php") ?>