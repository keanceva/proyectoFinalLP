<?php
    include("db.php");
    if(isset($_POST['save_task'])){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $mascota = $_POST['mascota'];
        $descripcion = $_POST['descripcion'];
        $edad = $_POST ['edad'];
        $sexo = $_POST ['sexo'];
        $query = "INSERT INTO formulario(nombre, telefono, mascota, edad, sexo descripcion) VALUES ('$nombre','$telefono','$mascota', '$edad', '$sexo' '$descripcion')";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Fallo");
        }
        $_SESSION['message'] = 'Se envió satisfactoriamente tu formulario.';
        $_SESSION['message_type'] = 'success';  
        header("Location: formulario.php");
    }
?>