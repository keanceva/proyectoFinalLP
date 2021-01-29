<?php
    include("db.php");
    $_SESSION['message'] =   "";
$_SESSION['message_type'] = ''; 
    if(isset($_POST['save_task'])){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $mascota = $_POST['mascota'];
        $descripcion = $_POST['descripcion'];
        $sexo = $_POST ['sexo'];
        $fecha = date("Y-m-d");   
        $image = $_FILES['image']['name'];
        $target = "images/".basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }

        if ($resultado = $conn->query("SELECT * FROM formulario WHERE nombre ='".$nombre."' and mascota ='".$mascota."'")) {
                        if ($resultado->num_rows > 0 ) {
                            $_SESSION['message'] = 'Este dueño y mascota ya estan registrados';
                            $_SESSION['message_type'] = 'warning'; 
                            header("Location: formulario.php");           
                        }else{
                            $query = "INSERT INTO formulario(nombre, telefono, mascota, sexo, descripcion,fecha,imagen) VALUES ('$nombre','$telefono','$mascota', '$sexo', '$descripcion','$fecha','$target')";
                            $result = mysqli_query($conn,$query);
                            if(!$result){
                                die("Fallo");
                            }
                            $_SESSION['message'] = 'Se envió satisfactoriamente tu formulario.';
                            $_SESSION['message_type'] = 'success';  
                            header("Location: formulario.php");
                        }             
            }




       
    }
?>