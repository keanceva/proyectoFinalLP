<?php
    include("db.php");
    $_SESSION['message'] =   "";
    $_SESSION['message_type'] = ''; 
    if($_POST['email'] != NULL || $_POST['password'] != NULL || $_POST['password2' != NULL]){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];


        if ($resultado = $conn->query("SELECT email,password FROM users WHERE email ='".$email."'")) {
                        if ($resultado->num_rows > 0 ) {
                            $_SESSION['message'] = 'Este correo ya esta registrado';
                            $_SESSION['message_type'] = 'warning'; 
                            header("Location: signup.php");           
                        }else{
                            $query = "INSERT INTO users(email, password) VALUES ('$email','$password')";
                            $result = mysqli_query($conn,$query);
                            if(!$result){
                                die("Fallo");
                            }
                            //$_SESSION['usuario'] = $email; 
                            //$_SESSION['message'] = 'Se envió satisfactoriamente tu formulario.';
                            //$_SESSION['message_type'] = 'success';  
                            header("Location: index.php");
                        }             
            }

      

    } else{
        $_SESSION['message'] = 'Completar los campos';
        $_SESSION['message_type'] = 'warning'; 
        header("Location: signup.php");

    }
    
?>