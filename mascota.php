<?php include("db.php") ?>
<?php include("include/header.php") ?>
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