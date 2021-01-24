<?php
    include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM formulario WHERE id = $id";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Fallo en eliminar.");
        }
        $_SESSION['message'] = 'Se eliminó el dato.';
        $_SESSION['message_type'] = 'danger';
        header("Location: mascota.php");
    }
?>