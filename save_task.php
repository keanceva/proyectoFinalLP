<?php
    include("db.php");
    if(isset($_POST['save_task'])){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $mascota = $_POST['mascota'];
        $descripcion = $_POST['descripcion'];
        $query = "INSERT INTO formulario(nombre, telefono, mascota, descripcion) VALUES ('$nombre','$telefono','$mascota','$descripcion')";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Fallo");
        }
        $_SESSION['message'] = 'Se envió satisfactoriamente tu formulario.';
        $_SESSION['message_type'] = 'success';  
        header("Location: formulario.php");
    }
?>