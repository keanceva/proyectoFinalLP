<?php include("db.php") ?>
<?php include("include/header.php"); ?>
   
    
    <div class="container p-12">
    <div class="row">
        <div class="col-md-8 mx-auto">
        <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
               
                </div>
            <?php } unset($_SESSION['message'])?>
            <h2>Registrarce o  <a href= "login.php"> Ingresar</a> </h2> 
        <div class="card card-body">
                    <form action="save_users.php" method="POST">
                        <div  class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Ingresar correo electronico" autofocus>
                        </div>
                        <div  class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Ingresar contrasena" autofocus>
                        </div>
                        <div  class="form-group">
                            <input type="password" name="password2" class="form-control" placeholder="Confirmar contrasena" autofocus>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save_users" value="Send">
                    </form>
                </div>
   
        </div>
    </div>
    </div>


<?php include("include/footer.php") ?>