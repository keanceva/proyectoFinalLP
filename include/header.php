<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="./include/style.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">LOGO</a>
        <ul id="lista">
            <li class="elemento"><a href="index.php" class="links">Home</a></li>

            
            <?php if(!isset($_SESSION['usuario']) ){ ?>

                <li class="elemento"><a href="login.php" class="links">Ingresar</a></li>
                <li class="elemento"><a href="signup.php" class="links">Registrarce</a></li>

                <?php } ?>

<?php if(isset($_SESSION['usuario'] ) ){
 
    ?>
                <li class="elemento"><a href="formulario.php" class="links">Formulario</a></li>
                <li class="elemento"><a href="mascota.php" class="links">Mascotas</a></li>
<li class="elemento"> <a href="#" class="links"><?= $_SESSION['usuario'] ?></a></li>
<li class="elemento" ><a style="color: rgb(223, 101, 101) !important" href="logout.php" class="links">Salir</a></li>
<?php } ?>      

     
           
        </ul>
    </div>
</nav>