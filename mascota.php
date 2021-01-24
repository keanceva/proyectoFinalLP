<?php include("db.php") ?>
<?php include("include/header.php") ?>
<div class="col-md-12">
<?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Hombre</th>
                <th>Teléfono</th>
                <th>Mascota</th>
                <th>Edad</th>
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
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['telefono'] ?></td>
                    <td><?php echo $row['mascota'] ?></td>
                    <td><?php echo $row['descripcion'] ?></td>
                    <td><?php echo $row['edad'] ?></td>
                    <td><?php echo $row['sexo'] ?></td>
                    <td><?php echo $row['fecha'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                        </a>
                        <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="col-md-12">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
</div>
<?php include("include/footer.php") ?>